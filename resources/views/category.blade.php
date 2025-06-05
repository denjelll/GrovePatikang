@extends('layouts.app')

@section('content')
<div class="container py-4 blog-post-content">
    <h2 class="text-center fw-bold mb-4 text-dark">{{ $category->name }}</h2>
    
    <div class="row">
        @foreach ($post as $item)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    @if ($item->image)
                        <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center text-dark fw-semibold">
                            <a href="/post/{{ $item->id }}" class="text-decoration-none text-dark">{{ $item->title }}</a>
                        </h5>

                        @if ($item->category_id == 1)
                            <p class="text-success fw-bold text-center mb-2" style="font-size: 1.2rem;">
                                Rp.{{ $item->lowprice }} - Rp.{{ $item->highprice }}
                            </p>
                        @endif

                        <p class="card-text text-muted flex-grow-1">
                            {!! \Illuminate\Support\Str::limit($item->description, 75, '') !!}
                            @if (strlen($item->description) > 75)
                                <span id="dots">...<a href="/post/{{ $item->id }}" class="text-decoration-none text-primary">Baca selengkapnya</a></span>
                            @endif
                        </p>

                        <div class="mt-auto pt-3">
                            <p class="mb-1"><i>Kategori:</i> 
                                <a href="/category/{{ $item->category->id }}" class="text-decoration-none text-primary fw-medium">
                                    {{ $item->category->name }}
                                </a>
                            </p>
                            <a href="/post/{{ $item->id }}" class="btn btn-outline-primary btn-sm w-100 mt-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
.blog-post-content h2 {
    font-size: 2rem;
}

.card:hover {
    transform: translateY(-5px);
    transition: 0.3s ease;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}
</style>
@endsection
