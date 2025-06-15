<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        return view('edukasi'); // harus ada di resources/views/edukasi.blade.php
    }
}
