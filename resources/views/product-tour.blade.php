@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product & Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        .container-fluid {
            display: flex;
            flex-direction: column;
        }

        .content-area {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
            background-color: #fdfbe9;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 25px;
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            padding: 10px;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-title {
            font-weight: bold;
            font-size: 1rem;
            margin: 10px 0 5px;
        }

        .product-category {
            color: #999;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .product-price {
            color: #009900;
            font-size: 1rem;
            font-weight: bold;
        }

        .sidebar {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .sidebar input[type="checkbox"] {
            margin-right: 10px;
        }

        .card-header {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 15px 0;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="card-header">Product & Tour</div>
    <div class="content-area">
        <div class="row">
            <!-- Sidebar filter -->
            <div class="col-md-3">
                <div class="sidebar">
                    <h5>Search</h5>
                    <input type="text" class="form-control mb-3" placeholder="Search Product...">

                    <h6>Filter by Type</h6>
                    <form method="GET" action="">
                        <div><input type="checkbox" name="type[]" value="ticket"> Ticket</div>
                        <div><input type="checkbox" name="type[]" value="package"> Package</div>
                        <div><input type="checkbox" name="type[]" value="product"> Product</div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-sm btn-primary w-100">Sort and Filter</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Product List -->
            <div class="col-md-9">
                <div class="product-grid">
                    @foreach($posts as $post)
                        <div class="product-card">
                            <a href="/post/{{ $post->id }}">
                                <img src="{{ asset('assets/images/' . $post->image) }}" alt="{{ $post->title }}">
                            </a>
                            <div class="product-category">
                                {{ $post->category->name ?? 'Tour Packages' }}
                            </div>
                            <div class="product-title">
                                {{ $post->title }}
                            </div>
                            <div class="product-price">
                                Rp {{ number_format($post->price, 0, ',', '.') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
