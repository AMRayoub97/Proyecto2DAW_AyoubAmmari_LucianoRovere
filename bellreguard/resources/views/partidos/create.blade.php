@extends('plantilla')

@section('titulo', 'Añadir Partido')

@section('contenido')
    @vite(['resources/sass/partidos/create.scss'])

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenedor-form">
        <h1>AÑADIR PARTIDO</h1>
        <hr>

        <form action="{{ route('partidos.store') }}" method="POST" class="form-jugador">
            @csrf

            <div class="grupo">
                <label for="equipo_id">Equipo Local</label>
                <input type="text" name="equipo_id" id="equipo_id" list="lista-equipos" placeholder="Selecciona el equipo local..." required value="{{ old('equipo_id') }}">
                <datalist id="lista-equipos">
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                    @endforeach
                </datalist>
                @error('equipo_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="grupo">
                <label for="equipo_visitante_id">Equipo Visitante</label>
                <input type="text" name="equipo_visitante_id" id="equipo_visitante_id" list="lista-visit" placeholder="Selecciona el equipo visitante..." required value="{{ old('equipo_visitante_id') }}">
                <datalist id="lista-visit">
                    @foreach($equiposV as $equipoV)
                        <option value="{{ $equipoV->id }}">{{ $equipoV->nombre }} | {{ $equipoV->categoria }} | {{ $equipoV->genero }}</option>
                    @endforeach
                </datalist>
                @error('equipo_visitante_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="grupo">
                <label for="lugar">Estadio</label>
                <input type="text" name="lugar" id="lugar" list="lista-localidad" placeholder="Nombre del estadio..." required value="{{ old('lugar') }}">
                <datalist id="lista-localidad">
                    @foreach($partidos as $partido)
                        <option value="{{ $partido->lugar }}"></option>
                    @endforeach
                </datalist>
                @error('lugar')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="grupo">
                <label for="fecha">Fecha y Hora</label>
                <input type="datetime-local" name="fecha" id="fecha" required value="{{ old('fecha') }}">
                @error('fecha')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-guardar">Guardar Partido</button>
        </form>
    </div>

@endsection
