<?php

namespace App\Imports;

use App\Models\DubaiCompany;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DubaiCompanyImport implements ToCollection, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
           
            try {
                $is_created =  DubaiCompany::updateOrCreate([
                    'office_no' => $row['office_number'] ?? null,
                    'company_name_en' => $row['name_english'] ?? $row['office_name_english'] ?? null,
                    'company_name_arab' => $row['office_name_arabic'] ?? $row['name_arabic'] ?? null,
                    'website' => $row['Website'] ?? null,
                    'phone' =>$row['phone_number'] ?? null,
                    'email' => $row['email'],
                ]);
              
            } catch (\Exception $e) {
                \Log::error('An error occurred: ' . $e->getMessage());
                return redirect()->back()->with('toast_error', 'Something Went Wrong!');
            }
        }
    }
}
