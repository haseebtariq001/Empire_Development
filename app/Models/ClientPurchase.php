<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPurchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id', 
        'installment_plan_id', 
        'client_id', 
        'purchase_status', 
    ];
}
