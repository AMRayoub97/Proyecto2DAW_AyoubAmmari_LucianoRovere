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
                    <input type="text" name="name" placeholder="NOMBRE" class="input-pill" required>
                    <input type="text" name="apellidos" placeholder="APELLIDOS" class="input-pill" required>
                    <input type="email" name="email" placeholder="CORREO" class="input-pill" required>
                    <input type="password" name="password" placeholder="CONTRASEÑA" class="input-pill" required>
                    <input type="text" name="fecha_nacimiento" placeholder="fecha nacimiento" class="input-pill" onfocus="(this.type='date')">

                    <div class="btn-container">
                        <button type="submit" class="btn-register-pill">REGISTRAR</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="register-right">
            <div class="logo-box">
                <img src="{{ asset('images/logo_sin_bg.png') }}" alt="Logo Bàsquet Bellreguard" class="img-logo-big">
            </div>
        </div>
    </div>
@endsection
