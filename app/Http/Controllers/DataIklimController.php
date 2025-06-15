<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataIklimController extends Controller
{
    public function index()
    {
        return view('data_iklim'); 
    }
}
