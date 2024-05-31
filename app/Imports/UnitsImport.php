<?php

namespace App\Imports;

use App\Jobs\SalesOfferJob;
use App\Models\ClientPurchase;
use App\Models\ClientUnit;
use App\Models\Commission;
use App\Models\InstallmentPlan;
use App\Models\SalesOffer;
use App\Models\Unit;
use App\Models\Unit_project;
use App\Models\User;
use App\Rules\UniqueUnitNoInFloor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Illuminate\Support\Facades\Validator;
use Modules\Account\Entities\Payment;

class UnitsImport implements ToCollection, WithHeadingRow, SkipsEmptyRows
{
    private $project_id;

    public function __construct($project_id)
    {
        $this->project_id = $project_id;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $floorNumber = $row['floor_number'] ?? $row['floor'] ?? null;

            $validator = Validator::make([
                'unit_no' => $row['unit_number'] ?? $row['unit'] ?? $row['apartment_number'] ?? null,
                'floor_number' => $floorNumber,
            ], [
                'unit_no' => ['required', new UniqueUnitNoInFloor($floorNumber, $this->project_id)],
            ]);
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
               \Log::info( $messages );
            }
            try {
                $unit_key = $row['unit_plan'] ?? null;
                $key_plan_key = $row['key_plan'] ?? null;
           

                $is_created =  Unit::updateOrCreate([
                    'unit_project_id' => $this->project_id,
                    'unit_no' => $row['unit_number'] ?? $row['unit'] ?? $row['apartment_number'] ?? null,
                    'unit_type' => $row['unit_type'] ?? $row['flat_type'] ?? $row['type'] ?? $row['apartment_type'] ?? null,
                    'apartment_view' => $row['view'] ?? $row['apartment_view'] ?? null,
                    'floor_number' => $row['floor'] ?? $row['floor_number'] ?? null,
                    'key_plan' => $key_plan_key ? 'uploads/unit_images/floor-plans/'.$key_plan_key : null,
                    'unit_plan' => $unit_key ? 'uploads/unit_images/floor-plans/'.$unit_key : null,
                    'area' => $row['total_area'] ?? $row['total_sq.f'] ?? $row['area'] ?? $row['area_sqft'] ?? null,
                    'selling_price' =>  str_replace(',', '', $row['selling_price'] ?? $row['price'] ?? null),
                    'status' => $row['status'] ?? 'Available',
                ]);
                if($is_created){
                    $logo = '';
                    $installment = InstallmentPlan::updateOrCreate([
                        'unit_id' => $is_created->id,
                        'down_payment' => str_replace(',', '', $row['down_payment'] ?? $row['on_booking'] ?? $row['start_paymnet'] ?? $row['20_down_payment'] ?? $row['20down_payment'] ?? $row['10_down_payment'] ??
                            $row['10_down_payment'] ?? 0),
                        'installment_amount' => str_replace(',', '', $row['installment_plan'] ?? $row['1_till_80_months'] ?? 0),
                        'completion_amount' => str_replace(',', '', $row['on_handover'] ?? $row['on_completion'] ?? $row['full_payment'] ?? $row['80_on_handover'] ?? $row['final_payment'] ?? 0),
                    ]);
                    if ($row['person_name']) {
                        $random_number = rand(10000, 99999);
                        $project = Unit_project::find($this->project_id);
                        $sales_offer = SalesOffer::create([
                            'offer_id' => $random_number,
                            'file' => 'Sales-Offer-' . $random_number . '.pdf',
                        ]);
                        $client_unit_data = [
                            'unit_project_id' => $this->project_id,
                            'unit_id' => $is_created->id,
                            'created_by' => $row['person_name'],
                            'sales_offer_id' => $sales_offer->id,
                            'status' => ( $row['status'] == 'Reserved' || $row['status'] == 'HOLD') ? 'In progress' : 'Closed Won',
                        ];
                        $client_unit = ClientUnit::create($client_unit_data);
                        SalesOfferJob::dispatch($is_created->id, $random_number, $logo);
    
                        if ($row['status'] != 'AVAILABLE') {
                            $user = User::where('email', $row['person_name'])->first();
                           $user =  empty($user) ? User::where('type', 'company')->first() :  $user;
                           if($user){
                               $data = [
                                   'amount' => $installment->down_payment,
                                   'created_by' => $client_unit->created_by,
                                   'installment_plan_id' => $installment->id,
                                   'unit_id' => $is_created->id,
                                   'client_unit' => $client_unit->id,
                                   'creator_id' => $user->id,
                                   'selling_price' => $is_created->selling_price,
                               ];
                               $this->make_payment($data);
                           }
                        }
                    }
                }
               
            } catch (\Exception $e) {
                \Log::error('An error occurred: ' . $e->getMessage());
                return redirect()->back()->with('toast_error', 'Something Went Wrong!');
            }
        }
    }

    public function make_payment($data)
    {
        $payment = Payment::create([
            'date' => now(),
            'amount' => $data['amount'],
            'description' => 'Down payment',
            'payment_method' => 'Cheque',
            'created_by' =>$data['created_by'],
            'installment_plan_id' => $data['installment_plan_id'],
        ]);
        
        $client_puchase = ClientPurchase::create([
            'unit_id' => $data['unit_id'],
            'installment_plan_id' =>  $data['installment_plan_id'],
            'client_id' =>  $data['creator_id'],
            'purchase_status' => 'Completed',
        ]);


        $commission = new Commission();
        $commission->client_units = $data['client_unit'];
        $commission->sold_on = now();
        $commission->status = 'In Progress';

        $commission_per = 0.5;

        $commission->commission_percent = $commission_per;
        $commission->earn_by = $data['creator_id'];
        $commission->amount = calculate_percentage($data['selling_price'], $commission_per);
        $commission->save();
    }
}
