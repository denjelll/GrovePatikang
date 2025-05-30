<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('UMNGrove', 'UMNGrove - Admin') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 4 & Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background-image: url("{{ asset('assets/images/image1.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bg-dark {
            background-color: rgba(0, 0, 0, 0.6) !important;
        }


        .navbar {
            background-color: #fcfce4;
            border-bottom: 1px solid black;
        }

        .navbar .container {
            justify-content: center;
        }

        .navbar .nav-item {
            margin: 0 10px; /* atau 15px sesuai tampilan */
            justify-content: center;
        }

        .navbar .nav-link {
            font-weight: 600;
            font-size: 1rem;
            color: #1f3a1f !important;
            text-transform: uppercase;
        }

        .footer {
            background-color: #1f3a1f;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer-link {
            color: white;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container d-flex align-items-center justify-content-between px-3">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::to('/assets/images/logo-website.png') }}" alt="Logo" style="height: 100px; width: auto;">
            </a>

            <!-- Burger -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav links -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    
                    @auth
                    @if (auth()->user()->role === 'admin')
                    <li class="nav-item"><a class="nav-link" href="{{ url('/admin/dashboard') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/admin/productandtour') }}">Manage Product and Tour</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Manage News and Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/informationpost') }}">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/editprofile') }}">Profil</a></li>
                    @endif
                    @endauth
                            
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/category/1">Product and Tour</a></li>
                        <li class="nav-item"><a class="nav-link" href="/category/2">News and Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/csr') }}">CSR Program</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/researchdedication') }}">Research and Dedication</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/aboutus') }}">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contactus') }}">Contact us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endguest
                </ul>

                <!-- User Dropdown -->
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container text-center">
            <a href="https://www.instagram.com/umngrove" class="footer-link">Website by @umngrove</a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
