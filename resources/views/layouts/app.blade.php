<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('UMNGrove', 'UMNGrove') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="{{ URL::asset('assets/css/style.css') }}" type="text/css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-website.png') }}">

    <style>
        .navbar-nav {
            justify-content: center;
            text-align: center;
        }

        .navbar-nav .nav-item {
            margin: 0 10px;
        }

        .nav-link {
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="navigation-bar">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #fcfce4; border-bottom: 1px solid black;">
            <div class="container d-flex flex-column align-items-center">
                <!-- Logo -->
                <a class="navbar-brand mb-2" href="{{ url('/') }}">
                    <img src="{{ URL::to('/assets/images/logo-website.png') }}" alt="Logo"
                        style="height: 100px; width: auto;">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        @auth
                            @if (auth()->user()->role == "admin")
                                <li class="nav-item"><a class="nav-link" href="{{ url('/admin/dashboard') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/admin/productandtour') }}">Manage Product and Tour</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/admin/blog') }}">Manage News and Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('admin.change-password') }}">Change Password</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                          
                                </li>
                            @endif
                        @endauth

                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('product-tour') }}">Product and Tour</a></li>
                            <li class="nav-item"><a class="nav-link" href="/category/3">News and Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/csr') }}">CSR Program</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/researchdedication') }}">Research and Dedication</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/aboutus') }}">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contactus') }}">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endguest
                    </ul>

                    <!-- User dropdown di navbar kanan -->
                    <ul class="navbar-nav ml-auto">
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <a href="https://www.instagram.com/umngrove" class="footer-link">Website by @umngrove</a>
        </div>
    </footer>
</body>

</html>
