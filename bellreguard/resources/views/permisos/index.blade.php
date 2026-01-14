@extends('plantilla')

@section('titulo', 'permisos')

@section('contenido')

    @vite(['resources/sass/permisos/index.scss'])

    <section>
        <h1>Usuarios:</h1>
        @foreach($usuarios as $usuario)
            <article class="usuario">
                <div class="cab">
                    <strong>#{{ $usuario->id }}</strong>
                    @if(!empty($usuario->foto))
                        <img src="{{ asset('images/usuarios/' . $usuario->foto) }}">
                    @else
                        <img src="{{ asset('images/perfil_default.webp') }}">
                    @endif

                    <strong>{{ $usuario->nombre }}</strong>
                </div>

                <strong>{{ $usuario->role }}</strong>

                <div class="btns">
                    <a href="{{ route('permisos.edit', $usuario->id) }}"><i class="bi bi-pencil-square"></i></a >
                    <a href="#"><i class="bi bi-trash3-fill"></i></a>
                </div>

            </article>
            <hr>
        @endforeach
    </section>

@endsection
