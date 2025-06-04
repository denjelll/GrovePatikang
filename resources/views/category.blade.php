@extends('layouts.app')
@section('content')
<div class="blog-post-content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ $category->name }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        @foreach ($post as $item)
                            <div class="col-md-4 col-form-label text-md">
                                <div class="item_subs">
                                    <h2 style="font-size:1.3rem">
                                        <a href="/post/{{ $item->id }}" style="color: black">{{ $item->title }}</a>
                                    </h2>
                                    @if ($item->image)
                                        <div class="post-image">
                                            <a href="/post/{{ $item->id }}">
                                                <img src="{{ asset('assets/images/' . $item->image) }}" alt="{{ $item->title }}">
                                            </a>
                                        </div>
                                    @endif

                                    @if ($item->category_id == 1)
                                        <h4 class="text-success fw-bold text-center" style="padding-top: 5px; padding-bottom: 10px; font-size:1.6rem;">
                                            Rp.{{ $item->lowprice }} - Rp.{{ $item->highprice }}
                                        </h4>
                                    @endif

                                    <p>
                                        {!! \Illuminate\Support\Str::limit($item->description, 75, '') !!}
                                        @if (strlen($item->description) > 75)
                                            <span id="dots">...<a href="/post/{{ $item->id }}" style="text-decoration: none; padding-left:5px;">full story</a></span>
                                        @endif
                                    </p>

                                    <p>
                                        <i>Category: </i>
                                        <a href="/category/{{ $item->category->id }}" style="text-decoration: none; font-size:1.3rem;">
                                            {{ $item->category->name }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
    transition: transform 0.2s ease;
}

.blog-post-content .item_subs:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.blog-post-content .post-image {
    margin-bottom: 15px;
}

.blog-post-content .post-image img {
    border-radius: 10%;
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.blog-post-content h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    text-align: center;
}

.blog-post-content h2 a {
    color: #333;
    text-decoration: none;
}

.blog-post-content h2 a:hover {
    color: #007bff;
}

.blog-post-content p {
    line-height: 1.6;
}

.navbar-nav .nav-link {
    font-size: 1rem;
    font-weight: 600;
    margin: 0 15px;
    text-transform: uppercase;
}

a.nav-link:link,
a.nav-link:visited,
a.nav-link:hover,
a.nav-link:active {
    color: #fb3f00;
    text-decoration: none;
}
</style>
@endsection
