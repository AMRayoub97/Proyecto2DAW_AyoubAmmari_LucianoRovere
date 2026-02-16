@extends('plantilla')

@section('titulo', 'Log-In')

@section('contenido')

    @vite(['resources/sass/auth/login.scss', 'resources/js/auth/login.js'])


    <div class="login-wrapper">
        <div class="login-left">
             @error('errorAcceso')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-container">
                <div class="logo-box">
                    <img src="{{ asset('images/logo_sin_bg.png') }}" alt="Logo" class="img-logo">
                </div>

                <h2 class="login-title">ACCEDE A TU CUENTA</h2>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="correo">correo</label>
                    <input type="text" name="correo" placeholder="bellreguard@correo.com" class="custom-input" required value="{{ old('correo') }}">

                    <div class="password-wrapper">
                        <label for="password">password</label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="****"
                            class="custom-input"
                            required
                        >

                        <span class="toggle-password" id="togglePass"><i class="bi bi-eye-fill"></i></span>
                    </div>


                    <div class="check-box-area">
                        <input type="checkbox" name="recordar" id="remember">
                        <label for="remember">Recuerda me</label>
                    </div>

                    <button type="submit" class="btn-submit-red">Log-In</button>


                    <div style="text-align: center; margin: 15px 0;"> o </div>

                    <a href="{{ route('google.login') }}" class="btn-google" style="display: flex; align-items: center; justify-content: center; gap: 10px; text-decoration: none; color: #444; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                        <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="Google logo">
                        Iniciar sesión con Google
                    </a>
                </form>
            </div>
        </div>

        <div class="login-right" style="background-image: url('{{ asset("/images/scroll2.jpg") }}');">
            <div class="register-overlay">
                <h1 class="register-title">Únete a la comunidad</h1>
                <a href="{{ route('registrar') }}" class="btn-pill-black">REGÍSTRATE</a>
            </div>
        </div>
    </div>
@endsection
