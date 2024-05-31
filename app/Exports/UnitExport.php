<?php

namespace App\Exports;

use App\Models\Unit;
use Maatwebsite\Excel\Concerns\{Exportable, WithHeadings, FromCollection, WithMapping};

class UnitExport implements FromCollection, WithHeadings, WithMapping
{
    use Exportable;

    protected $selectedStatuses, $project_id;

    public function __construct($selectedStatuses, $project_id)
    {
        $this->selectedStatuses = $selectedStatuses;
        $this->project_id = $project_id;
    }

    public function collection()
    {
        return Unit::whereIn('status', $this->selectedStatuses)->where('unit_project_id',  $this->project_id)->get();
    }

    public function map($unit): array
    {
        static $row = 0;
        $row++;

        return [
            'S.No' => $row,
            'Unit Number' => $unit->unit_no,
            'Floor Number' => $unit->floor_number,
            'Unit Type' => $unit->unit_type,
            'Apartment View' => $unit->apartment_view,
            'status' => $unit->status,
            'Price' => currency_format_without_symbol($unit->selling_price),
            '10% Down Payment' => currency_format_without_symbol($unit->installmentPlan->down_payment),
            '10% within 30 days' => currency_format_without_symbol($unit->installmentPlan->down_payment),
            '1% till 80 Months' => currency_format_without_symbol($unit->installmentPlan->installment_amount),
        ];
    }

    public function headings(): array
    {
        return [
            'S.No',
            'Unit Number',
            'Floor Number',
            'Unit Type',
            'Apartment View',
            'status',
            'Price',
            '10% Down Payment',
            '10% within 30 days',
            '1% till 80 Months',
        ];
    }
}
