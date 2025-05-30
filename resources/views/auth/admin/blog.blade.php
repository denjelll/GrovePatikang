@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
        <h2 class="mb-0">📚 Blog & News List</h2>
        <a href="{{ route('createblog') }}" class="btn btn-success">+ Add New</a>
    </div>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    {{-- Table view for desktop --}}
    <div class="d-none d-md-block">
        <div class="table-responsive shadow-sm rounded border">
            <table class="table table-striped align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Tags</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th style="width: 140px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->tags }}</td>
                            <td>{{ $item->category->name ?? 'Tidak ada kategori' }}</td>
                            <td>
                                <img src="{{ asset('assets/images/' . $item->image) }}"
                                     alt="{{ $item->title }}"
                                     class="img-fluid rounded"
                                     style="max-width: 80px;">
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('editblog', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('deleteblog', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus blog/news ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Card view for mobile --}}
    <div class="d-md-none">
        @foreach ($articles as $item)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="mb-1"><strong>Tags:</strong> {{ $item->tags }}</p>
                    <p class="mb-2"><strong>Category:</strong> {{ $item->category->name ?? 'Tidak ada kategori' }}</p>

                    @if ($item->image)
                        <img src="{{ asset('assets/images/' . $item->image) }}"
                             alt="{{ $item->title }}"
                             class="img-fluid rounded mb-3"
                             style="max-height: 200px; object-fit: cover;">
                    @endif

                    <div class="d-grid gap-2">
                        <a href="{{ route('editblog', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('deleteblog', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus blog/news ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
