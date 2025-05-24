@extends('layouts.admin')

@section('content')
<h2>Edit Product and Tour</h2>
<!-- tampilkan list article di kategori ID 1 -->
@foreach($articles as $article)
    <div>
        <h4>{{ $article->title }}</h4>
        <a href="{{ url('/editblog/'.$article->id) }}">Edit</a>
    </div>
@endforeach
@endsection
