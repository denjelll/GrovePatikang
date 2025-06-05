@extends('layouts.app')

@section('content')
@if(in_array($post->category_id,[1,2]))
<section class="product-detail" style="background-color:#FEFAE0; margin: -1.5% 0; padding: 0;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm p-4">
                    <nav class="breadcrumb mb-4">
                        <a class="breadcrumb-item" href="{{ url('/') }}">Beranda</a>
                        <a class="breadcrumb-item" href="{{ url()->previous() }}">{{$post->category->name}}</a>
                        <span class="breadcrumb-item active">{{$post->title}}</span>
                    </nav>
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <img src="{{ URL::to('/assets/images/' . $post->image) }}" class="img-fluid rounded" alt="{{$post->title}}">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bold" style="color: #C4661F; font-size: 30px;">{{$post->title}}</h2>
                            <p>{{$post->penjelasan}}</p>
                            <h4 class="text-success fw-bold">Rp {{ number_format($post->price, 0, ',', '.') }}</h4>
                            <p><strong>Available variants:</strong></p>
                            <ul>
                                <li>{{$post->ukuran}}</li>
                            </ul>
                            <a href="https://wa.me/082286411152" class="btn btn-success mt-3" style="width: 100%; font-size: 36px; font-weight: 600;"><i class="bi bi-whatsapp"></i> Order Now!</a>
                            <p class="mt-3">
                                <strong>Tags:</strong> {{$post->tags}}
                            </p>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="description-product">
                        <h2 style="color: #5F6F52; text-decoration: underline; font-size: 32px;">Description</h2>
                        <p style="text-align: justify;">{!! $post->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(in_array($post->category_id, [3, 4, 5]))
<section class="news-section py-4">
    <div class="container">

        {{-- Breadcrumb --}}
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">{{ $post->category->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
        </nav>

        {{-- Title --}}
        <h1 class="text-center fw-bold mb-4 text-dark">{{ $post->title }}</h1>

        {{-- Image --}}
        @if ($post->image)
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded shadow-sm" style="max-height: 450px; object-fit: cover;">
        </div>
        @endif

        {{-- Info --}}
        <p class="text-center text-muted mb-4">
            Dipublikasikan oleh <strong>{{ $post->user->name }}</strong> |
            {{ $post->created_at->format('d F Y') }}
        </p>

        {{-- Content --}}
        <div class="news-content mb-4 px-2 px-md-5">
            <div class="content-frame fs-5" style="line-height: 1.8; text-align: justify;">
                {!! $post->description !!}
            </div>
        </div>

        {{-- Tags --}}
        <div class="tags mt-4 text-center">
            <span class="badge bg-secondary">Tags:</span>
            <span class="ms-2">{{ $post->tags }}</span>
        </div>
    </div>
</section>
@endif
@endsection