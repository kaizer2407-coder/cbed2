<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmers';

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'birthday',
        'contact_number',
        'civil_status',
        'region',
        'province',
        'municipality',
        'barangay',
        'cooperative_id',
        'position',
        'work',
        'spouse',
        'spouse_occupation',
        'year',
    ];

    // RELATION: Farmer belongs to Cooperative
    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }
}