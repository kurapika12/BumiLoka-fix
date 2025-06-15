@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1 class="text-success text-center">Selamat Datang di BumiLoka</h1>
    <p class="text-center">Platform pelaporan dan pemantauan lingkungan untuk mendukung aksi iklim Indonesia.</p>

    <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Edukasi Iklim</h5>
                    <p>Pelajari dampak perubahan iklim dan solusi berkelanjutan.</p>
                    <a href="{{ route('edukasi') }}" class="btn btn-success">Mulai Belajar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Laporan Lingkungan</h5>
                    <p>Laporkan kejadian lingkungan yang mengkhawatirkan.</p>
                    <a href="{{ route('laporan.index') }}" class="btn btn-success">Laporkan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow text-center">
                <div class="card-body">
                    <h5 class="card-title">Data Iklim</h5>
                    <p>Pantau kondisi iklim real-time dari BMKG.</p>
                    <a href="{{ route('data-iklim') }}" class="btn btn-success">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>
@endsection
