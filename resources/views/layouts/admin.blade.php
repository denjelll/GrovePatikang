<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        body {
            background-image: url("{{ asset('assets/images/image1.jpg') }}");
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-content {
            flex: 1;
        }

        /* Navbar */
        .custom-navbar {
            background-color: #f8f8e1;
            padding: 10px 0;
        }

        .navbar-content {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            max-width: 1300px;
            margin: 0 auto;
            flex-wrap: wrap;
            gap: 40px;
        }

        .logo img {
            height: 100px;
            width: auto;
            margin-left: -78px;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .nav-links a {
            text-decoration: none;
            color: #1f3a1f;
            font-weight: 600;
            font-size: 16px;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #497f3a;
        }

        /* Login Box */
        .login-box {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: rgba(0, 51, 0, 0.75);
            border-radius: 16px;
            backdrop-filter: blur(2px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: white;
            text-align: center;
        }

        .login-box h1 {
            font-weight: bold;
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-control {
            width: 100%;
            border-radius: 50px;
            padding: 10px 20px 10px 40px;
            height: 45px;
            border: none;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #999;
        }

        .btn-login {
            background-color: #D8731F;
            border: none;
            border-radius: 25px;
            padding: 10px 30px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #b95f15;
        }

        /* Footer */
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

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                margin-top: 10px;
            }

            .logo img {
                height: 50px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="custom-navbar">
        <div class="navbar-content">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ URL::to('/assets/images/logo-website.png') }}" alt="Logo">
            </a>
            <div class="nav-links">
                <a href="{{ url('/') }}">HOME</a>
                <a href="/category/1">PRODUCT AND TOUR</a>
                <a href="/category/2">NEWS AND BLOG</a>
                <a href="{{ url('/csr') }}">CSR PROGRAM</a>
                <a href="{{ url('/researchdedication') }}">RESEARCH AND DEDICATION</a>
                <a href="{{ url('/aboutus') }}">ABOUT US</a>
                <a href="{{ url('/contactus') }}">CONTACT US</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Login Form -->
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
        <a href="#">INDIKATOR PENGUNJUNG</a>
    </div>

</body>
</html>
