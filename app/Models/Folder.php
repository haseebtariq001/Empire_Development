<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'unit_project_id',
        'folder_type',
        'parent_id'
    ];

    public function project() {
        return $this->belongsTo(Unit_project::class, 'unit_project_id');
    }

    public function files() {
        return $this->hasMany(File::class);
    }
}
