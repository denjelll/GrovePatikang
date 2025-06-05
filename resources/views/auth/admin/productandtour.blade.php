@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
        <h2 class="mb-0 fw-bold text-primary">🛍️ Product & Tour</h2>
        <a href="{{ route('createproductandtour') }}" class="btn btn-success shadow-sm">+ Add New</a>
    </div>

    <!-- Flash Message -->
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Desktop Table View -->
    <div class="d-none d-md-block">
        <div class="table-responsive shadow-sm rounded border">
            <table class="table table-hover align-middle mb-0">
                <thead class="thead-light">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th class="text-center" style="width: 140px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->category->name ?? 'Tidak ada kategori' }}</td>
                            <td>
                                <img src="{{ asset('assets/images/' . $article->image) }}" 
                                     alt="{{ $article->title }}" 
                                     class="img-thumbnail" 
                                     style="max-width: 80px;">
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('editproductandtour', $article->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('deleteproductandtour', $article->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus product/tour ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mobile Card View -->
    <div class="d-md-none">
        @foreach ($articles as $article)
            <div class="card mb-3 border-0 shadow-sm">
                @if ($article->image)
                    <img src="{{ asset('assets/images/' . $article->image) }}" 
                         alt="{{ $article->title }}" 
                         class="card-img-top" 
                         style="max-height: 180px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <h5 class="card-title fw-semibold">{{ $article->title }}</h5>
                    <p class="mb-1 text-muted"><strong>Tags:</strong> {{ $article->tags }}</p>
                    <p class="mb-2 text-muted"><strong>Category:</strong> {{ $article->category->name ?? 'Tidak ada kategori' }}</p>

                    <div class="d-grid gap-2 mt-3">
                        <a href="{{ route('editproductandtour', $article->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('deleteproductandtour', $article->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus product/tour ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
