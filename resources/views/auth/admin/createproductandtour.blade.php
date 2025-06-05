@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Page Heading -->
    <div class="mb-4">
        <h2 class="fw-bold text-primary">🛠️ Create Product & Tour</h2>
    </div>

    <!-- Validation Error -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Form Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('storeproductandtour') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label fw-semibold">Category</label>
                    <select name="category_id" class="form-select" required>
                        <option value="" disabled selected>Choose Category</option>
                        <option value="1">Product</option>
                        <option value="2">Tour</option> 
                    </select>
                </div>

                <div class="mb-3">
                    <label for="textarea" class="form-label fw-semibold">Description</label>
                    <textarea class="form-control" name="textarea" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label fw-semibold">Tags</label>
                    <input type="text" class="form-control" name="tags" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-semibold">Image</label>
                    <input type="file" class="form-control" name="image" accept="image/*" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label fw-semibold">Price</label>
                    <input type="number" class="form-control" name="price">
                </div>

                <div class="mb-3">
                    <label for="penjelasan" class="form-label fw-semibold">Detail</label>
                    <textarea class="form-control" name="penjelasan" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="ukuran" class="form-label fw-semibold">Berat/Ukuran</label>
                    <input type="text" class="form-control" name="ukuran">
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary shadow-sm">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
