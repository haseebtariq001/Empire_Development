<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Agent extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'agency_id',
        'relational_manager',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function relational_manager_name()
    {
        return $this->belongsTo(User::class, 'relational_manager', 'id');
    }
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function scopeAgencyAgents($query, $agencyId)
    {
        return $query->join('users', 'users.id', '=', 'agents.user_id')
            ->where('agents.agency_id', '=', $agencyId);
    }
}
