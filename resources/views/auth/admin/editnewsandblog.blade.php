@extends('layouts.admin')

@section('content')
<h2>Edit News and Blog</h2>
<!-- tampilkan list article di kategori ID 2 -->
@foreach($articles as $article)
    <div>
        <h4>{{ $article->title }}</h4>
        <a href="{{ url('/editblog/'.$article->id) }}">Edit</a>
    </div>
@endforeach
@endsection
