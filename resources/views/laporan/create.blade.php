@extends('layouts.app')

@section('title', 'Buat Laporan Baru')

@section('content')
    <h2>Buat Laporan Baru</h2>

    <form method="POST" action="{{ route('laporan.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="media" class="form-label">Foto/Video (Opsional)</label>
            <input type="file" name="media" id="media" class="form-control" accept="image/*,video/*">
        </div>
        
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Kirim Laporan</button>
    </form>
@endsection
