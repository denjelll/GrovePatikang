@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Selamat datang, {{ Auth::user()->name }}!</h2>

    <div class="card mt-4">
        <div class="card-header">Statistik</div>
        <div class="card-body">
            <ul>
                <li>Jumlah Artikel: <strong>{{ $jumlahArtikel }}</strong></li>
            </ul>
        </div>
    </div>

    <a href="{{ route('createblog') }}" class="btn btn-primary mt-4">Tambah Blog Baru</a>
</div>
@endsection
