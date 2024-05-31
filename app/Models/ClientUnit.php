<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientUnit extends Model
{
    use HasFactory;
    protected $fillable =[
        'unit_project_id',
        'unit_id',
        'client_id',
        'sales_offer_id',
        'status',
        'cheque_file',
        'is_deposit',
        'reservation_expiry',
        'created_by',
    ];

    public function setReservationExpiryAttribute($value)
    {
        $expiry = $this->attributes['created_at']->addHours(24);
        $this->attributes['reservation_expiry'] = $expiry;
    }
    

    public function project()
    {
        return $this->belongsTo(Unit_project::class, 'unit_project_id');
    }

    public function unit()
    {
        if ($this->type === 'company') {
            return $this->belongsTo(Unit::class, 'unit_id')->withTrashed();
        }
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function client()
    {
    return $this->belongsTo(User::class, 'client_id');
    }
  
    public function createdUser()
    {
    return $this->belongsTo(User::class, 'created_by');
    }

    public function offer()
    {
        return $this->belongsTo(SalesOffer::class, 'sales_offer_id');
    }
}
