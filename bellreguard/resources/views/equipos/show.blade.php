@extends('plantilla')

@section('titulo', 'Perfil de ' . $equipo->nombre)

@section('contenido')
@vite(['resources/sass/equipos/show.scss'])

<div class="team-profile">
    <div class="team-header">
        <div class="back-btn">
            <a href="{{ route('equipos.index') }}">
                <img src="{{ asset('images/flechaAtras.webp') }}" alt="Atrás">
            </a>
        </div>

        <div class="forward-btn">
            <a href="{{ route('equipos.index') }}">Editar</a>
        </div>


        <div class="team-main-info">
            <img src="{{ asset('images/equipos/' . $equipo->foto) }}" alt="{{ $equipo->nombre }}" class="team-big-logo">
            <h1>{{ $equipo->nombre }}</h1>
            <p class="city">{{ $equipo->categoria ?? 'Amateur' }} | {{ $equipo->entrenador }}</p>
        </div>

        <div class="team-record">
            <div class="record-box">
                <span class="label">VICTORIAS</span>
                <span class="value">{{ $equipo->estadisticaEquipo?->victorias ?? 0 }}</span>
            </div>
            <div class="record-divider"></div>
            <div class="record-box">
                <span class="label">DERROTAS</span>
                <span class="value">{{ $equipo->estadisticaEquipo?->derrotas ?? 0 }}</span>
            </div>
        </div>
    </div>

    <div class="team-stats-bar">
        <div class="t-stat">
            <strong>Tiros3</strong> <span>{{ $equipo->estadisticaEquipo?->tiros_3_anotados ?? '00.0'}} / {{ $equipo->estadisticaEquipo?->tiros_3_anotados + $equipo->estadisticaEquipo?->tiros_3_fallidos}}</span>
        </div>
        <div class="t-stat">
            <strong>Rebotes</strong> <span>{{ $equipo->estadisticaEquipo?->rebotes_ofensivos ?? '00.0'}} / {{ $equipo->estadisticaEquipo?->rebotes_ofensivos + $equipo->estadisticaEquipo?->rebotes_defensivos}}</span>
        </div>
        <div class="t-stat">
            <strong>Robos</strong> <span>{{ $equipo->estadisticaEquipo?->robos ?? '00.0' }}</span>
        </div>
    </div>

    <div class="roster-section">
        <h3>Plantilla de Jugadores</h3>
        <div class="roster-grid">
            @forelse($equipo->jugadores as $jugador)
                <a href="{{ route('jugadores.show', $jugador->id) }}" class="roster-card">
                    <img src="{{ asset('images/jugadores/' . $jugador->foto) }}" alt="{{ $jugador->nombre }}">
                    <div class="roster-info">
                        <span class="r-number">#{{ $jugador->id }}</span>
                        <span class="r-name">{{ $jugador->nombre }}</span>
                        <span class="r-pos">Alero</span>
                    </div>
                </a>

            @empty
                <h1>NO HAY JUGADORES😞</h1>
            @endforelse
        </div>
    </div>
</div>
@endsection
