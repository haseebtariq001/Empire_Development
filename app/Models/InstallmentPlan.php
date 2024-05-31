<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstallmentPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        'down_payment',
        'installment_amount',
        'completion_amount',
    ];
    
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
