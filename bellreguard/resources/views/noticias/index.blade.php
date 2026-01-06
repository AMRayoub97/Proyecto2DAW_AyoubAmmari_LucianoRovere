@extends('plantilla')

@section('titulo', 'Noticias')

@section('contenido')

@vite(['resources/sass/noticias/index.scss'])

<section id="news-page">

    {{ $tst = 1 }}

    {{-- HERO NOTICIA --}}
    <section class="news-hero">
        <img src="{{ asset('images/noticias/n1.jpg') }}" alt="Noticia principal">
        <div class="overlay">
            <span class="tag">PRIMER EQUIPO</span>
            <h1>Victoria épica en casa ante el líder</h1>
            <p>El Club Bellreguard logra un triunfo histórico con un último cuarto espectacular.</p>
            <a href="{{ route('noticia', $tst)}}" class="btn-read">Leer noticia</a>
        </div>
    </section>

    {{-- NOTICIAS DESTACADAS --}}
    <section class="news-featured">
        <h2>🔥 Destacadas</h2>

        <div class="featured-scroll">
            <article class="news-card">
                <a href="{{ route('noticia', $tst)}}">
                <img src="{{ asset('images/noticias/n2.jpg') }}">
                <div class="card-body">
                    <span class="tag">CANTERA</span>
                    <h3>La cantera brilla en el torneo provincial</h3>
                    <small>12 Ene 2025</small>
                </div>
                </a>
            </article>

            <article class="news-card">
                <a href="{{ route('noticia', $tst)}}">
                <img src="{{ asset('images/noticias/n2.jpg') }}">
                <div class="card-body">
                    <span class="tag">FICHAJES</span>
                    <h3>Nuevo base refuerza el proyecto</h3>
                    <small>10 Ene 2025</small>
                </div>
                </a>
            </article>

            <article class="news-card">
                <a href="{{ route('noticia', $tst)}}">
                <img src="{{ asset('images/noticias/n2.jpg') }}">
                <div class="card-body">
                    <span class="tag">AFICIÓN</span>
                    <h3>Récord de asistencia esta temporada</h3>
                    <small>08 Ene 2025</small>
                </div>
                </a>
            </article>
        </div>
    </section>

    {{-- LISTADO DE NOTICIAS --}}
    <section class="news-list">
        <h2>📰 Últimas Noticias</h2>

        <article class="news-row">
            <a href="{{ route('noticia', $tst)}}">
            <img src="{{ asset('images/logo.png') }}">
            <div>
                <h3>El equipo se prepara para el derbi</h3>
                <p>Entrenamientos intensivos de cara al partido más esperado.</p>
                <small>07 Ene 2025 · 3 min lectura</small>
            </div>
            </a>
        </article>

        <article class="news-row">
            <a href="{{ route('noticia', $tst)}}">
            <img src="{{ asset('images/logo.png') }}">
            <div>
                <h3>Entrevista exclusiva con el entrenador</h3>
                <p>Objetivos claros y ambición máxima esta temporada.</p>
                <small>05 Ene 2025 · 5 min lectura</small>
            </div>
            </a>
        </article>
    </section>

</section>

@endsection
