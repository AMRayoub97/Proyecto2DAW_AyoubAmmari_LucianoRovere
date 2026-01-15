@extends('plantilla')

@section('titulo', 'Añadir noticia')

@section('contenido')
    @vite(['resources/sass/noticias/create.scss'])

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenedor-form">
        <h1>Añadir nueva noticia</h1>

        <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data" class="form-jugador">
            @csrf

            {{-- titulo --}}
            <div class="grupo">
                <label>titulo</label>
                <input type="text" name="titulo" value="{{ old('titulo') }}" required>
                @error('titulo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Foto --}}
            <div class="grupo">
                <label>Foto</label>
                <input type="file" name="foto" accept="image/*">
                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- contenido --}}
            <div class="grupo">
                <label>contenido</label>
                <input type="text" name="contenido" value="{{ old('contenido') }}">
                @error('contenido')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- categoria --}}
            <div class="grupo">
                <label>categoria</label>
                <input type="text" name="categoria" value="{{ old('categoria') }}">
                @error('categoria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- todo_contenido --}}
            <div class="grupo">
                <label>todo_contenido</label>
                <textarea type="text" name="todo_contenido" >{{ old('todo_contenido') }}</textarea>
                @error('todo_contenido')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- tuto_id --}}
            <input type="hidden" name="tutor_id" value="{{ auth()->user()->id }}" >

            {{-- fecha --}}
            <div class="grupo">
                <label>fecha</label>
                <input type="date" name="fecha" value="{{ date('Y-m-d') }}">
            </div>


            <button type="submit" class="btn-guardar">Guardar Noticia</button>
        </form>
    </div>
@endsection
