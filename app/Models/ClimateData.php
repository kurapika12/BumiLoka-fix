<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClimateData extends Model
{
    public $timestamps = false; // Karena tidak ada `updated_at`

    protected $fillable = [
        'location',
        'temperature',
        'rainfall',
        'weather_condition',
        'recorded_at',
        'created_at'
    ];
}
