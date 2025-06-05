@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Blog or News</h2>
    <form action="{{ route('updateblog', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $article->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tags</label>
            <input type="text" name="tags" value="{{ $article->tags }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset('assets/images/' . $article->image) }}" width="120">
        </div>
        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
