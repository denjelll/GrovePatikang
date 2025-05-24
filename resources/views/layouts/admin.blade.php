<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 4 CSS & Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background-image: url("{{ asset('assets/images/image1.jpg') }}");
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        .navbar {
            background-color: #f8f8e1;
        }

        .navbar .nav-link {
            color: #1f3a1f;
            font-weight: 600;
        }

        .navbar .nav-link:hover {
            color: #497f3a;
        }

        .logo img {
            height: 100px;
            width: auto;
        }

        .login-box {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: rgba(0, 51, 0, 0.75);
            border-radius: 16px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: white;
        }

        .login-box h1 {
            font-weight: bold;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #999;
        }

        .form-control {
            padding-left: 40px;
            border-radius: 50px;
            height: 45px;
            border: none;
            margin-bottom: 20px;
        }

        .btn-login {
            background-color: #D8731F;
            border: none;
            border-radius: 25px;
            padding: 10px 30px;
            font-weight: bold;
            color: white;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #b95f15;
        }

        .footer {
            background-color: #1f3a1f;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .navbar-nav {
            flex-wrap: nowrap;
            overflow-x: auto;
            white-space: nowrap;
            gap: 20px;
        }

        .navbar-nav .nav-link {
            white-space: nowrap;
            padding-left: 12px;
            padding-right: 12px;
        }

    </style>
</head>
<body>

<!-- Bootstrap Navbar -->
<nav class="navbar navbar-expand-md navbar-light shadow-sm px-2">
    <div class="container px-0" style="padding-left: 10px;">
        <a class="navbar-brand logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo-website.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="/category/1">PRODUCT AND TOUR</a></li>
                <li class="nav-item"><a class="nav-link" href="/category/2">NEWS AND BLOG</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/csr') }}">CSR PROGRAM</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/researchdedication') }}">RESEARCH AND DEDICATION</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/aboutus') }}">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contactus') }}">CONTACT US</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="main-content">
    <div class="login-box">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <i class="bi bi-envelope"></i>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            </div>

            <div class="form-group">
                <i class="bi bi-lock"></i>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">LOGIN</button>
        </form>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <a href="#">REFUND POLICY</a>
    <a href="#">PRIVACY POLICY</a>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>
