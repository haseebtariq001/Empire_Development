<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Account\Entities\Payment;

class EoiForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_project_id',
        'unit_id',
        'payment_id',
        'user_id',
        'file',
        'is_signed',
        'status',
        'amount',
        'email',
        'fname',
        'country',
        'state',
        'city',
        'address',
        'nationality',
        'passport_no',       
    ];
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

    public function users()
    {
    return $this->belongsTo(User::class);
    }
  
    public function payments()
    {
    return $this->belongsTo(Payment::class);
    }
  
}
