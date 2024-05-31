<?php

namespace App\Console\Commands;

use App\Models\Unit;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Log;

class SalesOfferCommand extends Command
{
   
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'salesOffer:generate {unit_id} {offer_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $unit_id = $this->argument('unit_id');
        $offer_id = $this->argument('offer_id');
        
        return $this->attach_document($unit_id, $offer_id);
    }

    public function attach_document($unit_id, $id)
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

        $installment =  $unit->installmentPlan->installment_amount ? $unit->installmentPlan->installment_amount : calculate_percentage($unit->selling_price, $unit->project->installment_percentage);

        $output_file_path = storage_path('app/public/uploads/sales-offer/Sales-Offer-' . $id . '.pdf');
        $texts_to_add = [
            ['left' => 33, 'top' => 113, 'text' => $unit->unit_no],
            ['left' => 57, 'top' => 113, 'text' => $unit->unit_type],
            ['left' => 88, 'top' => 113, 'text' => $unit->area],
            ['left' => 115, 'top' => 113, 'text' => 'Q4 - 2026'],
            ['left' => 148, 'top' => 113, 'text' => $unit->apartment_view],
            ['left' => 167, 'top' => 113, 'text' => format_currency($unit->selling_price)],

            // Payments
            ['left' => 158, 'top' => 165, 'text' => format_currency(calculate_percentage($unit->selling_price, $unit->project->booking_percentage), $currency_code = 'AED', 0)],
            ['left' => 158, 'top' => 180, 'text' => format_currency(calculate_percentage($unit->selling_price, 10), $currency_code = 'AED', 0)],
            ['left' => 158, 'top' => 195, 'text' => format_currency($installment, $currency_code = 'AED', 0)],

        ];

        $this->fillPDFFile($sales_offer, $output_file_path, $texts_to_add, $unit);
        return $output_file_path;
    }

    public function fillPDFFile($file, $outputFilePath, $texts_to_add, $unit)
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

                $fpdi->Text(55, 41, $unit_area . ' Sq.ft.');

                $xPos = ($size['width'] - $newWidth) / 2;

                if ($key_plan && $unit_plan) {
                    $fpdi->Image($unit_plan, $xPos, 35, $newWidth, $newHeight, 'PNG');
                    $fpdi->Image($key_plan, $xPos, 150, $newWidth, $newHeight, 'PNG');
                } else {
                    $fpdi->Image($floor_plan, $xPos, 60, $newWidth, $newHeight, 'PNG');
                }
            }
        }
        return $fpdi->Output($outputFilePath, 'F');
    }
}
