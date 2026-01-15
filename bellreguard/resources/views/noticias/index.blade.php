@extends('plantilla')

@section('titulo', 'Noticias')

@section('contenido')

@vite(['resources/sass/noticias/index.scss'])

<section id="news-page">

    <div class="cab">
                <h2>Noticias</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                @auth
                 @if(auth()->user()?->role == 'admin')
                    <a href="{{ route('noticias.create') }}">AÑADIR</a>
                 @endif
                @endauth
            </div>
            <hr>
            <!-- mensajes -->
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session()->has('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('danger') }}
                    </div>
                @endif

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
                <a href="{{ route('noticias.show', $noticia->id)}}">
                <img src="{{ asset('images/noticias/'. $noticia->foto) }}">
                <div>
                    <h3>{{ $noticia->titulo }}</h3>
                    <p>{{ $noticia->contenido }}</p>
                    <small>{{ $noticia->fecha }}</small>
                </div>
                </a>
            </article>
        @empty
             <h1>No Hay Noticias :(</h1>
        @endforelse
    </section>

</section>

@endsection
