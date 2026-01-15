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

        <form action="{{ route('partidos.store') }}" method="POST" enctype="multipart/form-data" class="form-jugador">
            @method("POST")
            @csrf

            {{-- Nombre --}}
            <div class="grupo">
                
                <label for="equipolocal">Equipo Local:</label><br>
                <input type="text" name="equipolocal" id="equipolocal" list="lista-equipos" required>

                <datalist id="lista-equipos">
                    @forelse ($equipos as $equipo)
                        
                        <option value="{{ $equipo->nombre}}"></option>

                    @empty
                        <strong>No hay equipos</strong>
                    @endforelse
                    
                </datalist>
                
            </div>

            <div class="grupo">
                
                <label for="equipovisit">Equipo Visitante:</label><br>
                <input type="text" name="equipovisit" id="equipovisit" list="lista-visit" required>

                <datalist id="lista-visit">
                   @forelse ($equipos as $equipo)
                        <option value="{{$equipo->nombre}}"></option>
                   @empty
                       <strong>No hay equipos</strong>
                   @endforelse
                   
                    
                </datalist>
                
            </div>

            
            <div class="grupo">
                
                <label for="ciudad">Estadio del Partido:</label>
                <input type="text" name="ciudad" id="ciudad" list="lista-localidad" required>
                
            </div>

            <div class="grupo">
                
                <label for="dia">Fecha del Partido:</label>
                <input type="datetime-local" name="dia" id="dia" required>
                
            </div>
            <button type="submit" class="btn-guardar">Guardar</button>
        </form>
    </div>
@endsection
