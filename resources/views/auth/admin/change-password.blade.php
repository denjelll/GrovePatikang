@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white fw-bold">
            Ganti Password
        </div>

        <div class="card-body">
            {{-- Flash messages --}}
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url('/admin/change-password') }}">
                @csrf

                {{-- Current Password --}}
                <div class="mb-3 position-relative">
                    <label for="current_password" class="form-label">Password Lama</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Masukkan password lama" required>
                        <button class="btn btn-outline-secondary toggle-password" type="button" data-target="current_password">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                {{-- New Password --}}
                <div class="mb-3 position-relative">
                    <label for="new_password" class="form-label">Password Baru</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Masukkan password baru" required>
                        <button class="btn btn-outline-secondary toggle-password" type="button" data-target="new_password">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                {{-- Confirm Password --}}
                <div class="mb-3 position-relative">
                    <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" placeholder="Ulangi password baru" required>
                        <button class="btn btn-outline-secondary toggle-password" type="button" data-target="new_password_confirmation">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Bootstrap Icons CDN --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

{{-- Toggle Password JS --}}
<script>
    document.querySelectorAll('.toggle-password').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const inputId = this.getAttribute('data-target');
            const input = document.getElementById(inputId);
            const icon = this.querySelector('i');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            }
        });
    });
</script>
@endsection
