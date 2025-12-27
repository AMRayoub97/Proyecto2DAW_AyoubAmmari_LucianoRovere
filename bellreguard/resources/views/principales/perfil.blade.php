@extends('plantilla')

@section('titulo', 'perfile')

@section('contenido')

    @vite(['resources/sass/principales/perfile.scss','resources/js/principales/perfile.js'])

    <div class="contenido">
        <section id="info">
            <div class="infoUsuario">
                <label for="nombre">Nombre:</label><strong>{{auth()->user()->nombre ?? 'guest' }}</strong>
                <a href="#" >cambiar </a>
            </div>
            <div class="infoUsuario">
                <label for="apellido">Apellido:</label><strong>{{ auth()->user()->apellidos ?? 'guest' }}</strong>
                <a href="#" >cambiar </a>
            </div>
            <div class="infoUsuario">
                <label for="correo">Correo:</label><strong>{{ auth()->user()->correo ?? '****@bllreguard.es' }}</strong>
                <a href="#" >cambiar </a>
            </div>
            <div class="infoUsuario">
                <label for="contrasena">Contrasena:</label><strong>***********</strong>
                <a href="#" >cambiar </a>
            </div>
            <div class="infoUsuario">
                <label for="nacionalidad">Nacionalidad:</label><strong>{{ auth()->user()->nacionalidad ?? '-' }}</strong>
                <a href="#" >cambiar </a>
            </div>
            <div class="infoUsuario">
                <label for="fecha_nacimiento">Fecha nacimiento:</label><strong>{{ auth()->user()->fecha_nacimiento ?? '00-00-2000' }}</strong>
                <a href="#" >cambiar </a>
            </div>
            <div class="infoUsuario">
                <label for="telefono">telefono:</label><strong>{{ auth()->user()->telefono ?? "-" }}</strong>
                <a href="#" >cambiar </a>
            </div>
            <div class="infoUsuario">
                <label for="genero">Genero:</label><strong>{{ auth()->user()->genero ?? "-" }}</strong>
                <a href="#" >cambiar </a>
            </div>
        </section>
        <aside id="infoDerecha">
            <img src="{{ asset('/images/perfil_default.webp') }}" alt="fotoPerfil">
            <a href="#" id="cambiarFoto">Cambiar Foto Perfil</a>
            <a href="{{ route('logout') }}">Cerrar session</a>
        </aside>
    </div>

@endsection
