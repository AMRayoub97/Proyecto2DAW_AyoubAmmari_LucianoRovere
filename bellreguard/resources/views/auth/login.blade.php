@extends('plantilla')

@section('titulo', 'Log-In')

@section('contenido')

    @vite(['resources/sass/auth/login.scss'])


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
                    <label for="login">correo</label>
                    <input type="text" name="login" placeholder="bellreguard@correo.com" class="custom-input" required value=" {{ old('login') }}">
                    <label for="password">password</label>
                    <input type="password" name="password" placeholder="****" class="custom-input" required value=" {{ old('password') }}">

                    <div class="check-box-area">
                        <input type="checkbox" name="recordar" id="remember"><label for="recordar">Recuerda me</label>
                    </div>

                    <button type="submit" class="btn-submit-red">Log-In</button>
                </form>
            </div>
        </div>

        <div class="login-right" style="background-image: url('{{ asset("/images/scroll2.jpg") }}');">
            <div class="register-overlay">
                <h1 class="register-title">Únete a la comunidad</h1>
                <a href="#" class="btn-pill-black">REGÍSTRATE</a>
            </div>
        </div>
    </div>
@endsection
