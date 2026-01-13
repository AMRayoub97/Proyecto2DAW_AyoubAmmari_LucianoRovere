@extends('plantilla')

@section('titulo', 'Perfil de ' . $tutor->nombre)

@section('contenido')
@vite(['resources/sass/noticias/perfilTutor.scss'])

<div class="team-profile">
    <div class="team-header">
        <div class="back-btn">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/flechaAtras.webp') }}" alt="Atrás">
            </a>
        </div>


        <div class="team-main-info">
            @if(empty($tutor->foto))
                    <img src="{{ asset('images/perfil_default.webp')}}" alt="Atrás" class="team-big-logo">
                 @else
                    <img src="{{ asset('images/usuarios/' . $tutor->foto) }}" alt="Atrás"  class="team-big-logo">
                @endif
            <h1>{{ $tutor->nombre }}</h1>
            <p class="city">Num:{{ $tutor->telefono ?? '-' }} </p>
        </div>
    </div>

    <div class="team-stats-bar">
        <div class="t-stat">
            <strong>Categoria:</strong> <span>{{ $tutor->categoria ?? 'Nan'}} </span>
        </div>
        <div class="t-stat">
            <strong>Genero:</strong> <span>{{ $tutor->genero ?? 'Nan'}}</span>
        </div>
        <div class="t-stat">
            <strong>Fecha Nacimiento: </strong> <span>{{ $tutor->fecha_nacimiento ?? 'Nan' }}</span>
        </div>
    </div>

    <div class="roster-section">
        <h3>Plantilla de Jugadores</h3>
        <div class="roster-grid">
            @forelse($tutor->noticia as $noticia)
                <a href="{{ route('noticias.show', $noticia->id) }}" class="roster-card">
                    <img src="{{ asset('images/noticias/' . $noticia->foto) }}" alt="{{ $noticia->titulo }}">
                    <div class="roster-info">
                        <span class="r-number">#{{ $noticia->titulo}}</span>
                        <span class="r-name">{{ $noticia->contenido }}</span>
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
