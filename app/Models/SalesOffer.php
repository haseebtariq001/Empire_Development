<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer_id',
        'file',
    ];
    public static function salesOfferNumberFormat($number,$company_id = null,$workspace = null)
    {
    
        $data = !empty(company_setting('sales_offer_prefix')) ? company_setting('sales_offer_prefix') : '#SALOFFER-';
        return $data. sprintf("%05d", $number);
    }
}
