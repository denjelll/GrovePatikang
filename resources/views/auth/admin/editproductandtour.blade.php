@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Product and Tour</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('updateproductandtour', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $article->title }}" required>
        </div>

        <div class="mb-3">
            <label for="textarea">Description</label>
            <textarea class="form-control" name="textarea" rows="5" required>{{ $article->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" value="{{ $article->tags }}" required>
        </div>

        <div class="mb-3">
            <label for="image">Current Image</label><br>
            <img src="{{ asset('assets/images/' . $article->image) }}" width="120" class="mb-2">
            <input type="file" class="form-control" name="image" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" value="{{ $article->price }}">
        </div>

        <div class="mb-3">
            <label for="penjelasan">Penjelasan</label>
            <textarea class="form-control" name="penjelasan" rows="3">{{ $article->penjelasan }}</textarea>
        </div>

        <div class="mb-3">
            <label for="ukuran">Ukuran</label>
            <input type="text" class="form-control" name="ukuran" value="{{ $article->ukuran }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
