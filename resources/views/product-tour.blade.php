@extends('layouts.app')

@section('content')
<div class="container-fluid py-4" style="min-height: 100vh; background-color: #fdfbe9;">
    <div class="card mb-4 shadow-sm rounded-3 border-0">
        <div class="card-header text-center bg-white border-bottom-0">
            <h2 class="mb-0 fw-bold">Product & Tour</h2>
        </div>
        <div class="card-body p-4">
            <div class="row gx-4">
                <!-- Sidebar Filter -->
                <aside class="col-md-3 mb-4">
                    <div class="bg-white p-3 rounded shadow-sm">
                        <form method="GET" action="">
                            <div class="mb-3">
                                <input 
                                    type="text" 
                                    name="search" 
                                    class="form-control" 
                                    placeholder="Search Product..." 
                                    value="{{ request('search') }}">
                            </div>

                            <h6 class="fw-semibold mb-2">Filter by Category</h6>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input 
                                        class="form-check-input" 
                                        type="radio" 
                                        name="category" 
                                        id="catAll" 
                                        value="" 
                                        {{ request('category') == null ? 'checked' : '' }}>
                                    <label class="form-check-label" for="catAll">All</label>
                                </div>
                                <div class="form-check">
                                    <input 
                                        class="form-check-input" 
                                        type="radio" 
                                        name="category" 
                                        id="catProduct" 
                                        value="product" 
                                        {{ request('category') == 'product' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="catProduct">Product</label>
                                </div>
                                <div class="form-check">
                                    <input 
                                        class="form-check-input" 
                                        type="radio" 
                                        name="category" 
                                        id="catTour" 
                                        value="tour" 
                                        {{ request('category') == 'tour' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="catTour">Tour</label>
                                </div>
                            </div>

                            <h6 class="fw-semibold mb-2">Sort by Price</h6>
                            <select name="sort" class="form-select mb-3">
                                <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Default</option>
                                <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Price: Low to High</option>
                                <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Price: High to Low</option>
                            </select>

                            <button type="submit" class="btn btn-primary w-100">Apply</button>
                        </form>
                    </div>
                </aside>

                <!-- Product List -->
                <section class="col-md-9">
                    @if($posts->count() > 0)
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                        @foreach($posts as $post)
                        <div class="col">
                            <div class="card h-100 shadow-sm rounded-3 border-0">
                                <a href="{{ url('/post/' . $post->id) }}">
                                    <img 
                                        src="{{ asset('assets/images/' . $post->image) }}" 
                                        class="card-img-top rounded-top" 
                                        alt="{{ $post->title }}" 
                                        style="height: 180px; object-fit: cover;">
                                </a>
                                <div class="card-body text-center">
                                    <div class="text-muted mb-1" style="font-size: 0.9rem;">
                                        {{ $post->category->name ?? 'Tour Packages' }}
                                    </div>
                                    <h5 class="card-title fw-bold mb-2" style="font-size: 1.1rem;">
                                        {{ $post->title }}
                                    </h5>
                                    <div class="text-success fw-semibold">
                                        Rp {{ number_format($post->price, 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $posts->withQueryString()->links() }}
                    </div>
                    @else
                    <p class="text-center fs-5 text-muted">No products or tours found.</p>
                    @endif
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
