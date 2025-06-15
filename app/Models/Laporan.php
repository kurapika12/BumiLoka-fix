<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi secara massal
    protected $fillable = ['judul', 'deskripsi', 'lokasi'];
}
