@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Product and Tour</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('storeproductandtour') }}" method="POST" enctype="multipart/form-data">
        @csrf

        
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control" required>
                <option value="" disabled selected>Choose Category</option>
                <option value="1">Product</option>
                <option value="2">Tour</option> 
            </select>
        </div>
        
        <div class="mb-3">
            <label for="textarea">Description</label>
            <textarea class="form-control" name="textarea" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" required>
        </div>

        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price">
        </div>

        <div class="mb-3">
            <label for="penjelasan">Detail</label>
            <textarea class="form-control" name="penjelasan" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="ukuran">Stock</label>
            <input type="text" class="form-control" name="ukuran">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
