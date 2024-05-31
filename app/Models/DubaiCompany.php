<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DubaiCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_no',
        'company_name_en',
        'company_name_arab',
        'website',
        'phone',
        'email',
    ];
}
