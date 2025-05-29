@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Title</th>
                                <th scope="col">Post Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $item)
                                <tr>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>
                                        <a href="{{ url('/post/' . $item->id) }}">
                                            {{ $item->title }}
                                        </a>
                                    </td>
                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <form action="{{ route('deleteblog', [$item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Tombol Create Blog --}}
                    <div class="mt-3">
                        <a href="{{ url('/createblog') }}" class="btn btn-outline-primary">
                            + Create Blog
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
