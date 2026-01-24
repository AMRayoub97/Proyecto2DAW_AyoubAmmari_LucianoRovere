@extends('plantilla')

@section('titulo', 'Añadir evento')

@section('contenido')
    @vite(['resources/sass/jugadores/create.scss'])

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenedor-form">
        <h1>Añadir nuevo evento</h1>

        <form action="{{ route('eventos.store') }}" method="POST" class="form-jugador">
            @csrf

            <!-- Título -->
            <div class="grupo">
                <label>Título</label>
                <input type="text" name="titulo" value="{{ old('titulo') }}" required>
                @error('titulo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Fecha -->
            <div class="grupo">
                <label>Fecha y hora</label>
                <input type="datetime-local" name="fecha" value="{{ old('fecha') }}" required>
                @error('fecha')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Lugar -->
            <div class="grupo">
                <label>Lugar</label>
                <input type="text" name="lugar" value="{{ old('lugar') }}" required>
                @error('lugar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tipo -->
            <div class="grupo">
                <label>Tipo</label>
                <select name="tipo" required>
                    <option value="partido" {{ old('tipo') == 'partido' ? 'selected' : '' }}>Partido</option>
                    <option value="entrenamiento" {{ old('tipo') == 'entrenamiento' ? 'selected' : '' }}>Entrenamiento</option>
                    <option value="otro" {{ old('tipo') == 'otro' ? 'selected' : '' }}>Otro</option>
                </select>
                @error('tipo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Estado -->
            <div class="grupo">
                <label>Estado</label>
                <select name="estado" required>
                    <option value="proximamente" {{ old('estado') == 'proximamente' ? 'selected' : '' }}>Próximamente</option>
                    <option value="en_vivo" {{ old('estado') == 'en_vivo' ? 'selected' : '' }}>En Vivo</option>
                    <option value="finalizado" {{ old('estado') == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                </select>
                @error('estado')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-guardar">Guardar evento</button>
        </form>
    </div>
@endsection
