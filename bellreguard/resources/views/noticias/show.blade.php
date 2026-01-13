@extends('plantilla')

@section('titulo', 'Noticia')

@section('contenido')

@vite(['resources/sass/noticias/show.scss'])

<section id="news-detail">


    {{-- HERO NOTICIA --}}
    <header class="news-header">
        <img src="{{ asset('images/noticias/n1.jpg') }}" alt="Imagen noticia">

        <div class="overlay">
            <span class="tag">{{ $top->categoria }}</span>
            <h1>{{ $top->titulo }}</h1>

            <div class="meta">
                @if(empty($top->tutor->foto))
                    <img src="{{ asset('images/perfil_default.webp')}}" alt="autor">
                @else
                    <img src="{{ asset('images/usuarios/' . $top->tutor->foto)}}" alt="autor">
                @endif
                <div>
                    <strong>{{ $top->tutor?->nombre }}</strong>
                    <small>{{ $top->fecha }}</small>
                </div>
            </div>
        </div>
    </header>

    {{-- CONTENIDO --}}
    <article class="news-content">
        <h1 class="lead">
            {{ $noticia->titulo }}

        <img src="{{ asset('images/noticias/' . $noticia->foto) }}" alt="Acción del partido">


        <blockquote>
            <strong>
                {{ $noticia->contenido }}
            </strong>
        </blockquote>

        <p>
            {{ $noticia->todo_contenido }}
        </p>
    </article>

    {{-- NOTICIAS RELACIONADAS --}}
    <section class="news-related">
        <h2>🔗 Noticias relacionadas</h2>

        <div class="related-grid">
            @forelse($NoticiasRelacionadas as $NoticiaRelacionada)
                <article class="news-card">
                    <a href="{{ route('noticias.show', $NoticiaRelacionada->id) }}">
                    <img src="{{ asset('images/noticias/'. $NoticiaRelacionada->foto) }}">
                    <div class="card-body">
                        <span class="tag">{{ $NoticiaRelacionada->categoria }}</span>
                        <h3>{{ $NoticiaRelacionada->titulo }}</h3>
                    </div>
                    </a>
                </article>
            @empty
                <h1>No Hay Noticias</h1>
            @endforelse
        </div>
    </section>

</section>

@endsection
