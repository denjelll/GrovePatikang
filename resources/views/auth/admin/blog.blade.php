@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Blog & News List</h2>
    <a href="{{ route('createblog') }}" class="btn btn-success mb-3">+ Add New</a>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Tags</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->tags }}</td>
                    <td>{{ $item->category->name ?? 'Tidak ada kategori' }}</td>
                    <td><img src="{{ asset('assets/images/' . $item->image) }}" width="80"></td>
                    <td>
                        <form action="{{ route('deleteblog', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus blog/news ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <a href="{{ route('editblog', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
