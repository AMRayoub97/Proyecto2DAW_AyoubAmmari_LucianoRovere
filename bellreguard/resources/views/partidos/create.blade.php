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
        <h1>Añadir partido</h1>
        <hr>

        <form action="{{ route('partidos.store') }}" method="POST" class="form-jugador">
            @method("POST")
            @csrf

            {{-- Nombre --}}
            <div class="grupo">

                <label for="equipo_id">Equipo Local:</label><br>
                <input type="text" name="equipo_id" id="equipo_id" list="lista-equipos" required value="{{ old('equipo_id') }}">

                <datalist id="lista-equipos">
                    @forelse ($equipos as $equipo)

                        <option value="{{ $equipo->id}}">{{ $equipo->nombre}}</option>

                    @empty
                        <strong>No hay equipos</strong>
                    @endforelse

                </datalist>
                @error('equipo_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="grupo">

                <label for="equipo_visitante_id">Equipo Visitante:</label><br>
                <input type="text" name="equipo_visitante_id" id="equipo_visitante_id" list="lista-visit" required value="{{ old('equipo_visitante_id') }}">

                <datalist id="lista-visit">
                   @forelse ($equiposV as $equipoV)
                        <option value="{{$equipoV->id}}">{{$equipoV->nombre}}| {{ $equipoV->categoria }} | {{ $equipoV->genero }}</option>
                   @empty
                       <strong>No hay equipos</strong>
                   @endforelse


                </datalist>
                @error('equipo_visitante_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="grupo">

                <label for="lugar">Estadio del Partido:</label>
                <input type="text" name="lugar" id="lugar" list="lista-localidad" required value="{{ old('lugar') }}">
                <datalist id="lista-localidad">
                   @forelse ($partidos as $partido)
                        <option value="{{$partido->lugar}}"></option>
                   @empty
                       <strong>No hay lugares</strong>
                   @endforelse


                </datalist>
                @error('lugar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="grupo">

                <label for="fecha">Fecha del Partido:</label>
                <input type="datetime-local" name="fecha" id="fecha" required value="{{ old('fecha') }}">
                @error('fecha')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn-guardar">Guardar</button>
        </form>
    </div>
@endsection
