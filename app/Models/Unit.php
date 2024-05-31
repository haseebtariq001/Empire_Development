<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'project_units';
    protected $fillable = [
        'unit_project_id',
        'unit_no',
        'unit_type',
        'size',
        'block_no',
        'apartment_view',
        'apartment_type',
        'floor_number',
        'area',
        'selling_price',
        'parking',
        'status',
        'floor_plan',
        'key_plan',
        'client_id',
        'price_per',
        'on_booking',
        'on_completion',
        'installment',
        'unit_plan',
        'is_eoi',
    ];
    public function project()
    {
        return $this->belongsTo(Unit_project::class, 'unit_project_id');
    }

    public function installmentPlan()
    {
        return $this->hasOne(InstallmentPlan::class);
    }
}
