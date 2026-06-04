<?php

namespace App\Models;
use App\Models\Cooperative;

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

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class, 'cooperative_id');
    }

    // RELATION: Farmer belongs to Cooperative
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {

            $q->where('first_name', 'like', "%{$search}%")
            ->orWhere('last_name', 'like', "%{$search}%")
            ->orWhere('province', 'like', "%{$search}%")
            ->orWhere('municipality', 'like', "%{$search}%")
            ->orWhere('barangay', 'like', "%{$search}%")
            ->orWhere('position', 'like', "%{$search}%")

            // optional extra fields
            ->orWhere('work', 'like', "%{$search}%")
            ->orWhere('year', 'like', "%{$search}%")
            ->orWhere('contact_number', 'like', "%{$search}%")
            ->orWhere('civil_status', 'like', "%{$search}%");
        })

        // ✅ IMPORTANT: cooperative name search
        ->orWhereHas('cooperative', function ($q) use ($search) {
            $q->where('cooperative_name', 'like', "%{$search}%");
        });
    }
}