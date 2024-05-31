<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_units',
        'earn_by',
        'commission_percent',
        'amount',
        'sold_on',
        'status',
    ];

    public function clientUnit()
    {
        return $this->belongsTo(ClientUnit::class, 'client_units');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'earn_by');
    }
}
