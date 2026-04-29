@extends('plantilla')

@section('titulo', 'Perfil')

@section('contenido')

    @vite(['resources/sass/principales/perfile.scss','resources/js/principales/perfile.js'])

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenido">
        <aside id="infoDerecha" class="animate__animated animate__fadeInLeft">
            @if(empty(auth()->user()->foto))
                <img id="fotoPerfil" src="{{ asset('/images/perfil_default.webp') }}" alt="Foto de perfil">
            @else
                <img id="fotoPerfil" src="{{ asset('/images/usuarios/' . auth()->user()->foto) }}" alt="Foto de perfil">
            @endif
            <strong>{{ auth()->user()->nombre ?? 'Usuario' }}</strong>
            <span>{{ auth()->user()->correo ?? '' }}</span>
            <a href="{{ route('perfil.edit', auth()->user()->id) }}" id="cambiarFoto">Editar Perfil</a>
            <a href="{{ route('logout') }}" id="cerrarSesion">Cerrar sesión</a>
        </aside>

        <section id="info" class="animate__animated animate__fadeInRight">
            <div class="infoUsuario">
                <label>Nombre</label>
                <strong>{{ auth()->user()->nombre ?? '-' }}</strong>
            </div>
            <div class="infoUsuario">
                <label>Apellido</label>
                <strong>{{ auth()->user()->apellidos ?? '-' }}</strong>
            </div>
            <div class="infoUsuario">
                <label>Correo</label>
                <strong>{{ auth()->user()->correo ?? '-' }}</strong>
            </div>
            <div class="infoUsuario">
                <label>Contraseña</label>
                <strong>••••••••••</strong>
            </div>
            <div class="infoUsuario">
                <label>Nacionalidad</label>
                <strong>{{ auth()->user()->nacionalidad ?? '-' }}</strong>
            </div>
            <div class="infoUsuario">
                <label>Fecha de nacimiento</label>
                <strong>{{ auth()->user()->fecha_nacimiento ?? '-' }}</strong>
            </div>
            <div class="infoUsuario">
                <label>Teléfono</label>
                <strong>{{ auth()->user()->telefono ?? '-' }}</strong>
            </div>
            <div class="infoUsuario">
                <label>Género</label>
                <strong>{{ auth()->user()->genero ?? '-' }}</strong>
            </div>
        </section>
    </div>

@endsection
