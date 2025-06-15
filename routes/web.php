<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DataIklimController;


Route::get('/', function () {
    return view('beranda');
});
// Edukasi
Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi');

// Data Iklim
Route::get('/data-iklim', [DataIklimController::class, 'index'])->name('data-iklim');

// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');