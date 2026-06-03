<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cooperative extends Model
{
    protected $table = 'cooperatives';

    protected $fillable = [
        'cda_registration_no',
        'herd_code',
        'cooperative_name',
        'accreditation_status',
        'cooperative_type',
        'category',
        'date_established',
        'year',
        'region',
        'province',
        'city_municipality',
        'barangay',
        'address_line',
    ];
}