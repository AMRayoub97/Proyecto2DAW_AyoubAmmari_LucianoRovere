@extends('plantilla')

@section('titulo', 'Detalle Partido')

@section('contenido')
@vite(['resources/sass/partidos/show.scss'])

<main class="partido-detalle">

    <div class="cab">
        <h2>DETALLE DEL PARTIDO</h2>
        <a href="{{ route('partidos.index') }}" class="btn-volver">← Volver</a>
    </div>
    <hr>

    <section class="partido-card">
        <div class="equipo">
            <a href="{{ route('equipos.show', $partido->equipo?->id) }}">
                <img src="{{ asset('images/equipos/' . $partido->equipo?->foto) }}" alt="{{ $partido->equipo?->nombre }}">
                <strong>{{ $partido->equipo?->nombre }}</strong>
            </a>
        </div>

        <div class="info-partido">
            <h3>VS</h3>
            <p><strong>Fecha:</strong> {{ $partido->fecha }}</p>
            <p><strong>Lugar:</strong> {{ $partido->lugar }}</p>
            @if($partido->resultado)
                <p class="resultado"><strong>Resultado:</strong> {{ $partido->resultado }}</p>
            @else
                <p class="resultado proximamente">Próximamente</p>
            @endif
            @auth
                @if(auth()->user()->role == 'admin')
                    <a href="{{ route('partidos.edit', $partido->id) }}" class="btn-editar">Editar</a>
                @endif
            @endauth
        </div>

        <div class="equipo">
            <img src="{{ asset('images/equipos/' . $partido->equipoVisitante?->foto) }}" alt="{{ $partido->equipoVisitante?->nombre }}">
            <strong>{{ $partido->equipoVisitante?->nombre }} | {{ $partido->equipoVisitante->categoria }}</strong>
        </div>
    </section>

</main>
@endsection
