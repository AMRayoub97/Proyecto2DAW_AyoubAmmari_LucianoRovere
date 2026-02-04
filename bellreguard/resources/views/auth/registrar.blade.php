@extends('plantilla')

@section('titulo', 'Registro')

@section('contenido')
    @vite(['resources/sass/auth/registrar.scss'])

    <div class="register-wrapper">
        <div class="register-left">
            <div class="form-container">
                <h1 class="title-main">REGÍSTRATE</h1>

                <form action="{{ route('registrar') }}" method="POST" class="form-register">
                    @csrf
                    <input type="text" name="nombre" placeholder="NOMBRE" class="input-pill" value="{{ old('nombre') }}" required>
                    @error('nombre')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" name="apellidos" placeholder="APELLIDOS" class="input-pill" value="{{ old('apellidos') }}" required>
                    @error('apellidos')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="email" name="correo" placeholder="CORREO" class="input-pill" value="{{ old('correo') }}" required>
                    @error('correo')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="password" name="password" placeholder="CONTRASEÑA" class="input-pill" required>
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" name="fecha_nacimiento" placeholder="fecha nacimiento" class="input-pill" onfocus="(this.type='date')" max="{{ Date::now()->format('Y-m-d')}}" value="{{ old('fecha_nacimiento') }}">
                    @error('fecha_nacimiento')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="btn-container">
                        <button type="submit" class="btn-register-pill">REGISTRAR</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="register-right">
            <div class="logo-box">
                <img src="{{ asset('images/logo_sin_bg.png') }}" alt="Logo Bàsquet Bellreguard" class="img-logo-big">
                <a href="{{ route('login') }}">Log-In</a>

            </div>

        </div>
    </div>
@endsection
