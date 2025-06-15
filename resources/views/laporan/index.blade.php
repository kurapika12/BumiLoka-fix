@extends('layouts.app')

@section('title', 'Laporan Lingkungan')

@section('content')
    <h2>Daftar Laporan Lingkungan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($laporans->isEmpty())
        <p>Tidak ada laporan yang tersedia.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Waktu Lapor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporans as $laporan)
                    <tr>
                        <td>{{ $laporan->judul }}</td>
                        <td>{{ $laporan->deskripsi }}</td>
                        <td>{{ $laporan->lokasi }}</td>
                        <td>{{ $laporan->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('laporan.create') }}" class="btn btn-success mt-3">+ Tambah Laporan Baru</a>
@endsection
