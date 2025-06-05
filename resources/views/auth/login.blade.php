@extends('layouts.app')

@section('content')

<style>
    body {
        margin: 0;
        padding: 0;
    }

    .login-page {
        background-image: url("{{ asset('assets/images/image1.jpg') }}");
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
    }

    .login-box {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 25px;
        padding: 40px 30px;
        max-width: 400px;
        width: 100%;
        color: white;
        text-align: center;
    }

    .login-box h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 50px;
        padding-left: 45px;
        height: 45px;
    }

    .form-icon {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        font-size: 18px;
        color: #b66700;
    }

    .btn-login {
        background-color: #c7641c;
        border: none;
        border-radius: 25px;
        padding: 10px 30px;
        font-weight: bold;
        color: white;
        width: 100%;
        transition: 0.3s ease;
    }

    .btn-login:hover {
        background-color: #a05217;
    }

    .forgot-password {
        margin-top: 15px;
        display: block;
        color: #ffffff;
        font-size: 0.9rem;
    }

    .forgot-password:hover {
        text-decoration: underline;
    }
</style>

<!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<div class="login-page">
    <div class="login-box">
        <h1>Login</h1>
        @if (session('error'))
        <div class="alert alert-danger" style="border-radius: 10px; background-color: #ff4d4d; padding: 10px; color: white; margin-bottom: 20px;">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" style="border-radius: 10px; background-color: #ff4d4d; padding: 10px; color: white; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px; text-align: left;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="form-group">
                <i class="fas fa-envelope form-icon"></i>
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <i class="fas fa-lock form-icon"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-login">LOGIN</button>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>
</div>

@endsection
