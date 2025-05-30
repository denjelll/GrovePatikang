@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">👋 Halo, {{ Auth::user()->name }}</h1>
    <p class="text-muted">Selamat datang di Dashboard Admin. Kelola konten website dari panel ini.</p>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam fs-1 text-primary mb-3"></i>
                    <h5 class="card-title">Product & Tour</h5>
                    <p class="card-text">Kelola produk dan paket wisata.</p>
                    <a href="{{ url('/edit-productandtour') }}" class="btn btn-outline-primary">Kelola Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-newspaper fs-1 text-success mb-3"></i>
                    <h5 class="card-title">News & Blog</h5>
                    <p class="card-text">Update berita dan artikel blog terbaru.</p>
                    <a href="{{ url('/edit-newsandblog') }}" class="btn btn-outline-success">Kelola Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-info-circle fs-1 text-warning mb-3"></i>
                    <h5 class="card-title">Informasi</h5>
                    <p class="card-text">Tambahkan dan perbarui informasi penting.</p>
                    <a href="{{ url('/informationpost') }}" class="btn btn-outline-warning">Kelola Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-info-circle fs-1 text-warning mb-3"></i>
                    <h5 class="card-title">Product</h5>
                    <p class="card-text">Tambahkan dan perbarui informasi penting.</p>
                    <a href="{{ url('/productandtour') }}" class="btn btn-outline-warning">Kelola Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
