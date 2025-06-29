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
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');

// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/laporan', [LaporanController::class, 'adminIndex'])->name('admin.laporan.index');
    Route::get('/admin/laporan/{id}', [LaporanController::class, 'adminShow'])->name('admin.laporan.show');
    Route::post('/admin/laporan/{id}/update', [LaporanController::class, 'adminUpdate'])->name('admin.laporan.update');
    Route::post('/admin/laporan/{id}/delete', [LaporanController::class, 'adminDelete'])->name('admin.laporan.delete');
});