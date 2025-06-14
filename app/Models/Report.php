<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // Daftar kolom yang boleh diisi massal (misal saat create/update)
    protected $fillable = [
        'user_id',
        'category',
        'location',
        'description',
        'photo_url',
        'status'
    ];
}
