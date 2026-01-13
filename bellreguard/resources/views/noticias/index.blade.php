@extends('plantilla')

@section('titulo', 'Noticias')

@section('contenido')

@vite(['resources/sass/noticias/index.scss'])

<section id="news-page">


    {{-- HERO NOTICIA --}}
    <section class="news-hero">
        <img src="{{ asset('images/noticias/n1.jpg') }}" alt="Noticia principal">
        <div class="overlay">
            <span class="tag">{{ $primeraNoticia->categoria }}</span>
            <h1>{{ $primeraNoticia->titulo }}</h1>
            <p>{{ $primeraNoticia->contenido }}</p>
            <a href="{{ route('noticias.show', $primeraNoticia->id)}}" class="btn-read">Leer noticia</a>
        </div>
    </section>

    {{-- NOTICIAS DESTACADAS --}}
    <section class="news-featured">
        <h2>🔥 Destacadas</h2>

        <div class="featured-scroll">
            @forelse($destacadas as $destacada)
                <article class="news-card">
                    <a href="{{ route('noticias.show', $destacada->id)}}">
                    <img src="{{ asset('images/noticias/'. $destacada->foto) }}">
                    <div class="card-body">
                        <span class="tag">{{ $destacada->categoria }}</span>
                        <h3>{{ $destacada->titulo }}</h3>
                        <small>{{ $destacada->fecha }}</small>
                    </div>
                    </a>
                </article>
            @empty
                <h1>No Hay Noticias :(</h1>
            @endforelse

        </div>
    </section>

    {{-- LISTADO DE NOTICIAS --}}
    <section class="news-list">
        <h2>📰 Últimas Noticias</h2>

        @forelse($noticias as $noticia)
            <article class="news-row">
                <a href="{{ route('noticias.show', $destacada->id)}}">
                <img src="{{ asset('images/noticias/'. $destacada->foto) }}">
                <div>
                    <h3>{{ $destacada->titulo }}</h3>
                    <p>{{ $destacada->contenido }}</p>
                    <small>{{ $destacada->fecha }}</small>
                </div>
                </a>
            </article>
        @empty
             <h1>No Hay Noticias :(</h1>
        @endforelse
    </section>

</section>

@endsection
