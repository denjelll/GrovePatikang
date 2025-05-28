@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product and Tour List</h2>
    <a href="{{ route('createproductandtour') }}" class="btn btn-success mb-3">+ Add New</a>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Tags</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->tags }}</td>
                    <td><img src="{{ asset('assets/images/' . $article->image) }}" width="80"></td>
                    <td>
                        <form action="{{ route('deleteproductandtour', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="{{ route('editproductandtour', $article->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
