@extends('layouts.app') {{-- gunakan layout admin jika tersedia --}}

@section('title', 'Dashboard Admin')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 bg-light">
                <div class="card-body">
                    <h5 class="card-title">Total Artikel</h5>
                    <p class="display-6">{{ $jumlahArtikel }}</p>
                    <a href="{{ route('artikel.index') }}" class="btn btn-outline-primary btn-sm">Lihat Semua</a>
                </div>
            </div>
        </div>
        {{-- Tambahkan card lainnya jika ada statistik lain --}}
    </div>

    <div class="mt-5">
        <h4>Quick Actions</h4>
        <div class="d-flex flex-wrap gap-3 mt-3">
            <a href="{{ route('createblog') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-pencil-square me-2"></i> Tambah Blog Baru
            </a>
            <a href="{{ route('artikel.index') }}" class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-journal-text me-2"></i> Kelola Artikel
            </a>
            {{-- Tambahkan aksi lainnya sesuai fitur --}}
        </div>
    </div>
</div>
@endsection
