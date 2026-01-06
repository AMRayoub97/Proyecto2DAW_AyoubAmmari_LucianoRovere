@extends('plantilla')

@section('titulo', 'Noticia')

@section('contenido')

@vite(['resources/sass/noticias/show.scss'])

<section id="news-detail">

    {{ $tst = 1 }}

    {{-- HERO NOTICIA --}}
    <header class="news-header">
        <img src="{{ asset('images/noticias/n1.jpg') }}" alt="Imagen noticia">

        <div class="overlay">
            <span class="tag">PRIMER EQUIPO</span>
            <h1>Victoria épica en casa ante el líder</h1>

            <div class="meta">
                <img src="{{ asset('images/perfil_default.webp') }}" alt="autor">
                <div>
                    <strong>Club Bellreguard</strong>
                    <small>12 Enero 2025 · 4 min lectura</small>
                </div>
            </div>
        </div>
    </header>

    {{-- CONTENIDO --}}
    <article class="news-content">
        <p class="lead">
            El Club Bellreguard firmó una de las victorias más importantes de la temporada
            tras un último cuarto lleno de intensidad y carácter.
        </p>

        <p>
            El encuentro comenzó con mucha igualdad entre ambos conjuntos, destacando
            la intensidad defensiva y el ritmo alto de juego.
        </p>

        <img src="{{ asset('images/noticias/n2.jpg') }}" alt="Acción del partido">

        <p>
            En el último cuarto, el equipo local mostró su mejor versión,
            apoyado por una afición que no dejó de animar hasta el final.
        </p>

        <blockquote>
            “Este equipo nunca se rinde. La victoria es fruto del trabajo diario”
        </blockquote>

        <p>
            Con este triunfo, el Club Bellreguard se coloca en la parte alta de la tabla
            y afronta el próximo partido con máxima confianza.
        </p>
    </article>

    {{-- NOTICIAS RELACIONADAS --}}
    <section class="news-related">
        <h2>🔗 Noticias relacionadas</h2>

        <div class="related-grid">
            <article class="news-card">
                <a href="{{ route('noticia', $tst) }}">
                <img src="{{ asset('images/noticias/n2.jpg') }}">
                <div class="card-body">
                    <span class="tag">CANTERA</span>
                    <h3>Gran actuación del junior este fin de semana</h3>
                </div>
                </a>
            </article>

            <article class="news-card">
                <a href="{{ route('noticia', $tst) }}">
                <img src="{{ asset('images/noticias/n2.jpg') }}">
                <div class="card-body">
                    <span class="tag">AFICIÓN</span>
                    <h3>La grada vuelve a responder</h3>
                </div>
                </a>
            </article>
        </div>
    </section>

</section>

@endsection
