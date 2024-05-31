<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Unit;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use setasign\Fpdi\Fpdi;

class SalesOfferJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $unit_id, $offer_id, $logo;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($unit_id, $offer_id, $logo)
    {
        $this->unit_id = $unit_id;
        $this->offer_id = $offer_id;
        $this->logo = $logo;
    }

    public function arguments()
    {
        return [$this->unit_id, $this->offer_id, $this->logo];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return $this->attach_document($this->unit_id, $this->offer_id, $this->logo);
    }
    public function attach_document($unit_id, $id, $logo)
    {
        $unit = Unit::find($unit_id);
        if (Str::contains($unit->unit_type, ['1'])) {
            $sales_offer = public_path('assets/files/sales-offer/Empire Estates Sales Offer 1bhk.pdf');
        } elseif (Str::contains($unit->unit_type, ['2'])) {
            $sales_offer = public_path('assets/files/sales-offer/Empire Estates Sales Offer 2bhk.pdf');
        } elseif (Str::contains($unit->unit_type, ['3'])) {
            $sales_offer = public_path('assets/files/sales-offer/Empire Estates Sales Offer 3bhk.pdf');
        } else {
            $sales_offer = public_path('assets/files/sales-offer/Empire Estates Sales Offer Studio.pdf');
        }
        $output_file_path = storage_path('app/public/uploads/sales-offer/Sales-Offer-' . $id . '.pdf');


        $installment =  $unit->installmentPlan->installment_amount ? $unit->installmentPlan->installment_amount : calculate_percentage($unit->selling_price, $unit->project->installment_percentage);
        // View
        $split_view_array = splitStringByCharacter($unit->apartment_view);
        $key_1 = $split_view_array[0];
        $key_2 = array_key_exists(2, $split_view_array) ? $split_view_array[1] . '' . $split_view_array[2] : $split_view_array[1];

        $apartment_view_txt_2 = count($split_view_array) > 1 ?   $key_2 : '';

        $conditionalArray = [];
        if (isset($key_1) && $key_1 !== "" && $apartment_view_txt_2 !== "") {
            $conditionalArray = [
                ['left' => 141, 'top' => 111, 'text' => $key_1],
                ['left' => 141, 'top' => 115, 'text' => $apartment_view_txt_2],
            ];
        } else if ((isset($key_1) && $key_1 !== "") && $apartment_view_txt_2 == "") {
            $conditionalArray = [
                ['left' => 141, 'top' => 113, 'text' => $key_1],
            ];
        } else {
            $conditionalArray = [
                ['left' => 141, 'top' => 113, 'text' => $apartment_view_txt_2],
            ];
        }
        // type
        $split_type_array = splitStringByCharacter($unit->unit_type);
        $type_key_1 = $split_type_array[0];
        $type_key_2 = array_key_exists(2, $split_type_array) ? $split_type_array[1] . '' . $split_type_array[2] : $split_type_array[1];

        $type_txt_2 = count($split_type_array) > 1 ?   $type_key_2 : '';

        $conditional_type_array = [];

        if (isset($type_key_1) && $type_key_1 !== "" && $type_txt_2 !== "") {
            $conditional_type_array = [
                ['left' => 57, 'top' => 111, 'text' => $type_key_1],
                ['left' => 57, 'top' => 115, 'text' => $type_txt_2],
            ];
        } else if ((isset($type_key_1) && $type_key_1 !== "") && $type_txt_2 == "") {
            $conditional_type_array = [
                ['left' => 57, 'top' => 113, 'text' => $type_key_1],
            ];
        } else {
            $conditional_type_array = [
                ['left' => 57, 'top' => 113, 'text' => $type_txt_2],
            ];
        }

        $texts_to_add = [
            ['left' => 33, 'top' => 113, 'text' => $unit->unit_no],
            ['left' => 88, 'top' => 113, 'text' => $unit->area],
            ['left' => 115, 'top' => 113, 'text' => 'Q4 - 2026'],
            ['left' => 167, 'top' => 113, 'text' => format_currency($unit->selling_price)],

            // Payments
            ['left' => 158, 'top' => 165, 'text' => format_currency(calculate_percentage($unit->selling_price, $unit->project->booking_percentage), $currency_code = 'AED', 0)],
            ['left' => 158, 'top' => 180, 'text' => format_currency(calculate_percentage($unit->selling_price, 10), $currency_code = 'AED', 0)],
            ['left' => 158, 'top' => 195, 'text' => format_currency($installment, $currency_code = 'AED', 0)],

        ];
        $texts_to_add = array_merge($conditionalArray, $texts_to_add, $conditional_type_array);

        $this->fillPDFFile($sales_offer, $output_file_path, $texts_to_add, $unit, $logo);
        return $output_file_path;
    }

    public function fillPDFFile($file, $outputFilePath, $texts_to_add, $unit, $logo)
    {
        $fpdi = new Fpdi();
        $count = $fpdi->setSourceFile($file);
        $unit_area = $unit->area;
        $key_plan = $unit->key_plan ? get_file($unit->key_plan) : null;
        $unit_plan = $unit->unit_plan ? get_file($unit->unit_plan) : null;
        $floor_plan = $unit->floor_plan ? get_file($unit->floor_plan) : null;


        for ($i = 1; $i <= $count; $i++) {
            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);
            $fpdi->SetFont("Times", "", 9);
            $fpdi->SetTextColor(0, 0, 0);


            if ($i === 1) {
                if (!empty($logo)) {
                    $fpdi->Image(get_file($logo), 10, 8, 30, 30);
                }
            }

            if ($i === 2) {
                foreach ($texts_to_add as $textData) {
                    $left = $textData['left'];
                    $top = $textData['top'];
                    $text = $textData['text'];
                    $fpdi->Text($left, $top, $text);
                }
            }
            if ($i === 3 && ($key_plan || $unit_plan || $floor_plan)) {
                $fpdi->SetFont("Times", "", 15);
                $fpdi->Text(55, 41, $unit_area . ' Sq.ft.');
                $imagePath = $key_plan ?? $unit_plan ?? $floor_plan;
                list($width, $height) = getimagesize($imagePath);

                $maxWidth = 150;
                $maxHeight = 100;

                $newWidth = $width;
                $newHeight = $height;

                if ($width > $maxWidth || $height > $maxHeight) {
                    $aspectRatio = $width / $height;
                    if ($maxWidth / $maxHeight > $aspectRatio) {
                        $newWidth = $maxHeight * $aspectRatio;
                        $newHeight = $maxHeight;
                    } else {
                        $newWidth = $maxWidth;
                        $newHeight = $maxWidth / $aspectRatio;
                    }
                }



                $xPos = ($size['width'] - $newWidth) / 2;
                if (!empty($key_plan)) {
                    $key_plan_exten = strtolower(pathinfo($key_plan, PATHINFO_EXTENSION));
                    $fpdi->Image($key_plan, $xPos, 150, $newWidth, $newHeight, $key_plan_exten);
                }

                if (!empty($unit_plan)) {
                    $unit_plan_exten = strtolower(pathinfo($unit_plan, PATHINFO_EXTENSION));
                    $fpdi->Image($unit_plan, $xPos, 45, $newWidth, $newHeight, $unit_plan_exten);
                }

                if (empty($key_plan) && empty($unit_plan) && !empty($floor_plan)) {
                    $file_extension = strtolower(pathinfo($floor_plan, PATHINFO_EXTENSION));
                    $fpdi->Image($floor_plan, $xPos, 60, $newWidth, $newHeight, $file_extension);
                }
            }
        }

        return $fpdi->Output($outputFilePath, 'F');
    }
}
