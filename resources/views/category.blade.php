@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News
 and Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.blog-post-content .item_subs {
    margin-bottom: 30px;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    display: flex;
    height: 600px;
    flex-direction: column;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease; /* Add a hover transition */
}

.blog-post-content .item_subs:hover {
    transform: translateY(-5px); /* Slightly lift the item on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
}

.blog-post-content .post-image {
    margin-bottom: 15px;
}

.blog-post-content .post-image img {
    border-radius: 10%;
    width: 100%;
    height: auto;
}

.blog-post-content h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    text-align: center;
}

.blog-post-content h2 a {
    color: #333; /* Darken the link color */
    text-decoration: none; /* Remove underline from link */
}

.blog-post-content h2 a:hover {
    color: #007bff; /* Change link color on hover (blue) */
}

.blog-post-content p {
    line-height: 1.6;
}

.post-image img { /* Or any more specific selector if needed */
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.py-4 {
    height: 95.3%;
}

.navbar-nav .nav-link {
        font-size: 1rem;
        font-weight: 600;
        margin: 0 15px;
        text-transform: uppercase;
}

a.nav-link:link
{
   color: #fb3f00;
   text-decoration: none;
}
a.nav-link:visited
{
   color: #fb3f00;
   text-decoration: none;
}
a.nav-link:hover
{
   color: #fb3f00;
   text-decoration: none;
}
a.nav-link:active
{
   color: #fb3f00;
   text-decoration: none;
}

</style>
</head>
<body>

<div class="blog-post-content">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="text-align: center">{{ $category->name }}</div>
            <div class="card-body">
                <div class="form-group row">
                    @foreach ($post as $post)
                        <div class="col-md-4 col-form-label text-md">
                            <div class="item_subs">
                                <h2 style="font-size:1.3rem"><a href="/post/{{ $post->id }}" style="color: black" >{{ $post->title }}</a></h2>
                                @if ($post->image)
                                    <div class="post-image">
                                        <a href="/post/{{ $post->id }}" style="color: black" >
                                            <img src="{{ asset('assets/images/' . $post->image) }}" alt="{{ $post->title }}"  style="width: 100%; height: 200px; object-fit: cover;">
                                        </a>
                                    </div>
                                @endif
                                @if ($post->category_id==1)
                                <h4 class="text-success fw-bold" style="text-align:center; padding-top: 5px; padding-bottom: 10px; font-size:1.6rem;">Rp.{{$post->lowprice}} - Rp.{{$post->highprice}}</h4>
                                @endif
                                    {!! \Illuminate\Support\Str::limit($post->description, 75, '') !!}
                                    @if (strlen($post->description) > 75)
                                        <span id="dots">...<a href="/post/{{ $post->id }}" style="text-decoration: none; padding-left:5px;">full story</a></span>
                                        <span id="more">{ \Illuminate\Support\Str::substr($post->description, 75)}</span>
                                    @endif
                                </p>
                                <p><i>Category: </i><a href="/category/{{ $post->category->id }}" style="text-decoration: none; font-size:1.3rem;">{{ $post->category->name }}</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
@endsection
