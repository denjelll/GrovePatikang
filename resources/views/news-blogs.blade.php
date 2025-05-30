@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-5">
        <h2 class="fw-bold">News and Blogs Update</h2>
        <p class="text-muted">Jelajahi artikel, update terbaru, dan informasi seputar ekowisata dan pelestarian alam.</p>
    </div>

    <div class="row g-4">
        @foreach ($posts as $post)
            @if (in_array(strtolower($post->category->name), ['news update', 'blogs', 'news']))
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    @if ($post->image)
                        <img src="{{ asset('assets/images/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="bg-secondary" style="height: 200px;"></div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <small class="text-muted mb-1">{{ $post->category->name }}</small>
                        <h5 class="card-title">
                            <a href="/post/{{ $post->id }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                        </h5>
                        <p class="card-text flex-grow-1">
                            {!! \Illuminate\Support\Str::limit($post->description, 100, '...') !!}
                        </p>
                        <div class="text-end mt-2">
                            <a href="/post/{{ $post->id }}" class="btn btn-sm btn-outline-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
