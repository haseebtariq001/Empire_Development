<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'registration_no',
        'company_name',
        'website',
        'company_whatsapp',
        'GM_whatsapp',
        'marketing_director_no',
        'trade_license',
        'passport',
        'emirates_id',
        'rara_card',
        'bank_name',
        'ac_name',
        'branch_name',
        'branch_address',
        'currency',
        'swift_code',
        'status',
        'reason',
        'iban',
        'created_by',
        'trno_expiry',
        'relational_manager',
        'trn_certificate',
        'rera_certificate',
        'brokage_agreement',
        'is_agreement_signed',
        'agency_license_number',
        'trno_issue_place',
        'po_box',
        'logo',
        'is_submitted',
        'brokage_signed_agreement',
        'BA_uploaded_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ScopeGetapproves($query){
        return $query->where('status', 'Approved');
    }
}
