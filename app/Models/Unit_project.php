<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'total_floor',
        'total_units',
        'location',
        'launch_date',
        'image_file',
        'booking_percentage',
        'completion_percentage',
        'installment_duration',
        'installment_percentage',
        'admin_fee',
    ];
}
