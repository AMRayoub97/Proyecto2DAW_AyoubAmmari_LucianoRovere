@extends('plantilla')

@section('titulo', 'Añadir equipo')

@section('contenido')
    @vite(['resources/sass/equipos/create.scss'])

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenedor-form">
        <h1>Añadir nuevo equipo</h1>

        <form action="{{ route('equipos.store') }}" method="POST" enctype="multipart/form-data" class="form-jugador">
            @csrf

            {{-- Nombre --}}
            <div class="grupo">
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" required>
                @error('nombre')
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

            {{-- categoria --}}
            <div class="grupo">
                <label>categoria</label>
                <input type="text" name="categoria" value="{{ old('categoria') }}">
                @error('categoria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Género --}}
            <div class="grupo">
                <label>Género</label>
                <select name="genero">
                    <option value="M" {{ old('genero') == 'M' ? 'selected' : '' }}>M</option>
                    <option value="F" {{ old('genero') == 'F' ? 'selected' : '' }}>F</option>
                </select>
                @error('genero')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- entrenador --}}
            <div class="grupo">
                <label>entrenador </label>
                <input type="text" name="entrenador" value="{{ old('entrenador') }}">
                @error('entrenador')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-guardar">Guardar equipo</button>
        </form>
    </div>
@endsection
