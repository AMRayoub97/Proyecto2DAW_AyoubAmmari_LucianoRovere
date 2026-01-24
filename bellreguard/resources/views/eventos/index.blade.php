@extends('plantilla')

@section('titulo', 'Calendario de Competición')

@section('contenido')
@vite(['resources/sass/eventos/index.scss'])

<div class="events-page">
    @if($eventos->count() > 0)
    @php $destacado = $eventos->first(); @endphp
    <div class="featured-event">
        <div class="overlay"></div>
        <div class="featured-content">
            <span class="badge-status">{{ strtoupper($destacado->estado) }}</span>
            <div class="match-main">
                <h1>{{ $destacado->titulo }}</h1>
            </div>
            <div class="match-details-hero">
                <span><i class="fas fa-map-marker-alt"></i> {{ $destacado->lugar }}</span>
                <span><i class="fas fa-calendar"></i> {{ \Carbon\Carbon::parse($destacado->fecha)->format('d/m/Y H:i') }}</span>
                <span class="type-tag">{{ strtoupper($destacado->tipo) }}</span>
            </div>
        </div>
    </div>
    @endif

    <div class="events-grid">
        @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
        <div class="cabEvt">
            <h3 class="section-title">Calendario Oficial</h3>
            @auth
                @if(auth()->user()->role == 'admin')
                    <a href="{{ route('eventos.create') }}">Anadir</a>
                @endif
            @endauth
        </div>

        @foreach($eventos as $evento)
        <div class="event-detailed-card {{ $evento->estado }}">
            <div class="card-side-info">
                <div class="date-badge">
                    <span class="day">{{ \Carbon\Carbon::parse($evento->fecha)->format('d') }}</span>
                    <span class="month">{{ strtoupper(\Carbon\Carbon::parse($evento->fecha)->shortMonthName) }}</span>
                </div>
                <div class="hour">{{ \Carbon\Carbon::parse($evento->fecha)->format('H:i') }}</div>
            </div>

            <div class="card-main-content">
                <div class="top-bar">
                    <span class="type-label">{{ $evento->tipo }}</span>
                    <span class="venue">{{ $evento->lugar }}</span>
                </div>

                <div class="event-body">
                    <h2 class="event-title">{{ $evento->titulo }}</h2>
                    <div class="status-indicator">
                        <span class="dot"></span> {{ ucfirst($evento->estado) }}
                    </div>
                </div>
            </div>

            <div class="card-actions">
                @if($evento->estado == 'finalizado')
                    <button type="button" class="btn-secondary">finalizado</button>
                @elseif($evento->estado == 'en_vivo')
                    <button type="button" class="btn-primary live">Seguir en Vivo</button>
                @else
                    <button type="button" class="btn-primary">Recordatorio</button>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
