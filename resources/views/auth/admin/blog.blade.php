@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Blog</h3>
        <a href="{{ url('/createblog') }}" class="btn btn-outline-primary">+ Create Blog</a>
    </div>

    <div class="card">
        <div class="card-body">
            @if($articles->isEmpty())
                <p class="text-muted">Belum ada blog yang tersedia.</p>
            @else
                <table class="table table-hover table-sm">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td class="text-end">
                                    <a href="{{ route('editblog', $item->id) }}" class="btn btn-sm btn-secondary me-1">Edit</a>
                                    
                                    <form action="{{ route('deleteblog', $item->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus blog ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
