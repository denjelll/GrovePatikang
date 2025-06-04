@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Page Heading -->
    <div class="mb-4">
        <h2 class="fw-bold text-primary">📝 Create Blog & News</h2>
    </div>

    <!-- Validation Error -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Form Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('storeblog') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" class="form-control" name="title" id="title" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label fw-semibold">Category</label>
                    <select name="category_id" class="form-select" id="category_id" required>
                        <option value="" disabled selected>Choose Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="textarea" class="form-label fw-semibold">Content</label>
                    <textarea class="form-control" name="textarea" id="textarea" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label fw-semibold">Tags</label>
                    <input type="text" class="form-control" name="tags" id="tags">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-semibold">Image</label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="penjelasan" class="form-label fw-semibold">Excerpt / Highlight</label>
                    <textarea class="form-control" name="penjelasan" id="penjelasan" rows="3"></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary shadow-sm">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
