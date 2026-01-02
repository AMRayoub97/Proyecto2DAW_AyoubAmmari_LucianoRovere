@extends('plantilla')

@section('titulo', 'Añadir jugador')

@section('contenido')
    @vite(['resources/sass/jugadores/create.scss','resources/js/jugadores/create.js'])

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenedor-form">
        <h1>Añadir nuevo jugador</h1>

        <form action="{{ route('jugadores.store') }}" method="POST" enctype="multipart/form-data" class="form-jugador">
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

            {{-- Nacionalidad --}}
            <div class="grupo">
                <label>Nacionalidad</label>
                <input type="text" name="nacionalidad" value="{{ old('nacionalidad') }}">
                @error('nacionalidad')
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

            {{-- Edad --}}
            <div class="grupo">
                <label>Edad</label>
                <input type="number" name="edad" value="{{ old('edad') }}" min="5" max="60">
                @error('edad')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Altura --}}
            <div class="grupo">
                <label>Altura (cm)</label>
                <input type="number" name="altura" value="{{ old('altura') }}">
                @error('altura')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Peso --}}
            <div class="grupo">
                <label>Peso (kg)</label>
                <input type="number" name="peso" value="{{ old('peso') }}">
                @error('peso')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Experiencia --}}
            <div class="grupo">
                <label>Años de experiencia</label>
                <input type="number" name="experiencia" value="{{ old('experiencia') }}">
                @error('experiencia')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Puntuación --}}
            <div class="grupo">
                <label>Puntuación</label>
                <input type="number" name="puntuacion" value="{{ old('puntuacion') }}" step="0.1" min="0" max="10">
                @error('puntuacion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-guardar">Guardar jugador</button>
        </form>
    </div>
@endsection
