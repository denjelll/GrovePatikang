@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Sawadikap, {{ Auth::user()->name }}</h1>

    <div class="card">
        <div class="card-body">
            <p>Ini adalah halaman khusus Admin untuk mengelola konten website.</p>
            <ul>
                <li><a href="{{ url('/edit-productandtour') }}">Edit Product and Tour</a></li>
                <li><a href="{{ url('/edit-newsandblog') }}">Edit News and Blog</a></li>
                <li><a href="{{ url('/informationpost') }}">Kelola Informasi</a></li>
            </ul>
        </div>
    </div>
@endsection
