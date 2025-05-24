@extends('layouts.admin')

@section('content')

<style>
    body {
        background-color: #f0f4f8;
    }

    .card {
        margin-top: 100px;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        border: none;
    }

    .card-header {
        background-color: #4a90e2;
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        text-align: center;
    }

    .btn-primary {
        background-color: #4a90e2;
        border-color: #4a90e2;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #357ab8;
        border-color: #357ab8;
    }

    .form-check-label {
        font-size: 0.9rem;
    }

    .form-control {
        border-radius: 8px;
    }

    .btn-link {
        font-size: 0.9rem;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Admin Login') }}</div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                   {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <!-- Submit -->
                        <div class="form-group mt-4 d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
