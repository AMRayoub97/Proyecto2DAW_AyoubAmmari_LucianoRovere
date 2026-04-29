@extends('plantilla')

@section('titulo', 'Partidos')

@section('contenido')
    @vite(['resources/sass/partidos/index.scss', 'resources/js/partidos/index.js'])

    <section>
        <div class="cab animate__animated animate__fadeInDown">
            <h2>PARTIDOS</h2>
            @auth
                <a href="{{ route('partidos.create') }}">AÑADIR +</a>
            @endauth
        </div>
        <hr>

        @if($partidosHoy->count())
            <div class="seccion-titulo animate__animated animate__fadeIn">
                <span class="dot-live"></span>
                <h3>Jugando Ahora</h3>
            </div>
            <div class="destacados">
                @foreach($partidosHoy as $partido)
                    <a href="{{ route('partidos.show', $partido->id) }}" class="tarjeta-partido animate__animated animate__fadeInUp">
                        <div class="equipo">
                            <img src="{{ asset('images/equipos/' . $partido->equipo?->foto) }}" alt="{{ $partido->equipo?->nombre }}">
                            <strong>{{ $partido->equipo?->nombre }}</strong>
                        </div>
                        <div class="resultado">
                            <small>{{ $partido->fecha }}</small>
                            <span class="vs">VS</span>
                            <span class="badge-live">En vivo</span>
                        </div>
                        <div class="equipo">
                            <img src="{{ asset('images/equipos/' . $partido->equipoVisitante?->foto) }}" alt="{{ $partido->equipoVisitante?->nombre }}">
                            <strong>{{ $partido->equipoVisitante?->nombre }}</strong>
                            <small>{{ $partido->equipoVisitante?->categoria }}</small>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

        <div class="seccion-titulo animate__animated animate__fadeIn">
            <h3>Próximos Partidos</h3>
        </div>
        <div class="destacados">
            @foreach($partidosProximos as $partido)
                <a href="{{ route('partidos.show', $partido->id) }}" class="tarjeta-partido animate__animated animate__fadeInUp">
                    <div class="equipo">
                        <img src="{{ asset('images/equipos/' . $partido->equipo?->foto) }}" alt="{{ $partido->equipo?->nombre }}">
                        <strong>{{ $partido->equipo?->nombre }}</strong>
                    </div>
                    <div class="resultado">
                        <small>{{ $partido->fecha }}</small>
                        <span class="vs">VS</span>
                        <span class="badge-proximo">Próximamente</span>
                    </div>
                    <div class="equipo">
                        <img src="{{ asset('images/equipos/' . $partido->equipoVisitante?->foto) }}" alt="{{ $partido->equipoVisitante?->nombre }}">
                        <strong>{{ $partido->equipoVisitante?->nombre }}</strong>
                        <small>{{ $partido->equipoVisitante?->categoria }}</small>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

@endsection
