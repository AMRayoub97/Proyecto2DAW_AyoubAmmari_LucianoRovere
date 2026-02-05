@extends('plantilla')

@section('titulo', $jugador->nombre)

@section('contenido')

@vite(['resources/sass/jugadores/show.scss'])

    <div class="player-card">
        <div class="header">
            <div class="team-logo">
                <a href="{{ route('jugadores.index') }}">
                    <img src="{{ asset('images/flechaAtras.webp') }}" alt="flecha" >
                </a>
            </div>

            @auth

                @if(auth()->user()->role == 'admin' || auth()->user()->role == 'entrenador')
                    <div class="forward-btn">
                        <a href="{{ route('jugadores.edit', $jugador->id) }}">Editar</a>
                    </div>
                @endif
            @endauth


            <div class="player-image">
                <img src="{{ asset('images/jugadores/' . $jugador->foto) }}" alt="fotoJugador">
            </div>
            <div class="player-info">
                <span class="number">#{{ $jugador->id }}</span>
                <h1>{{ $jugador->nombre }}</h1>
                <p class="position">Alero | {{ $jugador->nacionalidad }}</p>
            </div>
        </div>

        <div class="stats-container">
            <div class="stat-box">
                <span class="stat-value">{{ $jugador->estadisticas?->pts_partido }}</span>
                <span class="stat-label">PTS</span>
            </div>
            <div class="stat-box">
                <span class="stat-value">{{ $jugador->estadisticas?->rebotes_partido }}</span>
                <span class="stat-label">REB</span>
            </div>
            <div class="stat-box">
                <span class="stat-value">{{ $jugador->estadisticas?->asistencias_partido }}</span>
                <span class="stat-label">AST</span>
            </div>
            <div class="stat-box">
                <span class="stat-value">{{ $jugador->estadisticas?->fg_porcentaje }}</span>
                <span class="stat-label">FG%</span>
            </div>
        </div>

        <div class="footer-details">
            <div class="detail">
                <strong>ALTURA</strong> {{ $jugador->altura }} cm
            </div>
            <div class="detail">
                <strong>PESO</strong> {{ $jugador->peso }} kg
            </div>
            <div class="detail">
                <strong>EDAD</strong> {{ $jugador->edad }} anos
            </div>
        </div>
    </div>

    <div class="advanced-stats">
            <h3>Estadísticas Detalladas</h3>
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Anotados / Totales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiros de 2</td>
                        <td>{{ $jugador->estadisticas?->tiros_2_anotados }} / {{ ($jugador->estadisticas?->tiros_2_anotados + $jugador->estadisticas?->tiros_2_fallidos) }}</td>
                    </tr>
                    <tr>
                        <td>Triples (T3)</td>
                        <td>{{ $jugador->estadisticas?->tiros_3_anotados }} / {{ ($jugador->estadisticas?->tiros_3_anotados + $jugador->estadisticas?->tiros_3_fallidos) }}</td>
                    </tr>
                    <tr>
                        <td>Tiros Libres</td>
                        <td>{{ $jugador->estadisticas?->tiros_libres_anotados }} / {{ ($jugador->estadisticas?->tiros_libres_anotados + $jugador->estadisticas?->tiros_libres_fallidos) }}</td>
                    </tr>
                    <tr>
                        <td>Rebotes (Off/Def)</td>
                        <td>{{ $jugador->estadisticas?->rebotes_ofensivos }} / {{ $jugador->estadisticas?->rebotes_defensivos }}</td>
                    </tr>
                    <tr>
                        <td>Robos / Pérdidas</td>
                        <td>{{ $jugador->estadisticas?->robos }} / {{ $jugador->estadisticas?->perdidas }}</td>
                    </tr>
                    <tr>
                        <td>Faltas Personales</td>
                        <td>{{ $jugador->estadisticas?->faltas_personales }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="social-media">
            <a href="#" class="social-icon insta">Instagram</a>
            <a href="#" class="social-icon twitter">X (Twitter)</a>
            <a href="#" class="social-icon fb">Facebook</a>
        </div>
    </div>
</div>

@endsection
