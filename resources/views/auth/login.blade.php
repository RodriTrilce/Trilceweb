@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f8f8; /* Reemplaza con tu imagen real */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .login-overlay {
        background-color: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(8px);
        border-radius: 20px;
        padding: 40px 30px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    .login-btn {
        background-color: #FF4E0E;
        border: none;
        transition: background 0.3s ease;
    }

    .login-btn:hover {
        background-color: #e24308;
    }

    .form-control:focus {
        border-color: #FF4E0E;
        box-shadow: 0 0 0 0.2rem rgba(255, 78, 14, 0.25);
    }

    .card-header {
        background-color: transparent;
        text-align: center;
        padding-bottom: 0;
        border-bottom: none;
    }

    .login-logo img {
        width: 100px;
        margin-bottom: 10px;
    }

    .login-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #FF4E0E;
    }

    .form-label {
        font-weight: 500;
    }
</style>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 20vh;">
    <div class="col-md-6">
        <div class="card border-0">
            <div class="card-header">
                <div class="login-logo">
                    <img src="https://www.trilce.edu.pe/static/images/logos/logo-a-colegio.gif" alt="Trilce Colegio">                </div>
            </div>
            <div class="card-body login-overlay">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember"
                               {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Recuérdame</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn login-btn text-white">
                            Iniciar sesión
                        </button>
                    </div>

                    {{-- <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}" class="text-decoration-none">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
