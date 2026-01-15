@extends('plantilla')

@section('titulo', 'Partidos')

@section('contenido')
 @vite(['resources/sass/partidos/index.scss'])
        <section>
            <div class="cab">
                <h2>PARTIDOS</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                @auth
                    <a href="{{ route('partidos.create') }}">AÑADIR +</a>
                @endauth
            </div>
            <hr>
<main>
    <div class="cab">
        <h2>Jugando ahora</h2>
    </div>

<section id="destacados">
    @foreach ($partidos as $partido)
    <article>
        <div class="equipoDestacado">
        
             <strong>{{$partido->equipo?->nombre}}</strong>
            <img src="{{ $partido->equipo?->foto }}" alt="logo-equipo">   
        
        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>
            <h3>84 - 82</h3>
            <a href="#">Highlights</a>
        </div>

        <div class="equipoDestacado">
            <strong>{{$partido->nombre}}</strong>
            <img src="{{ $partido->foto }}" alt="">
        </div>
    </article>
    @endforeach
</section>

</section>
    <div class="cab">
    <br>
    <h2>Próximos Partidos</h2>
    <br>
</div>
<section id="destacados">

    <article>
        <div class="equipoDestacado">
            <strong>Equipo 1</strong>
            <img src="" alt="">
        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>
            <h3>84 - 82</h3>
            <a href="#">Highlights</a>
        </div>

        <div class="equipoDestacado">
            <strong>Equipo 2</strong>
            <img src="" alt="">
        </div>
    </article>
<article>
        <div class="equipoDestacado">
            <strong>Equipo 1</strong>
            <img src="" alt="">
        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>
            <h3>84 - 82</h3>
            <a href="#">Highlights</a>
        </div>

        <div class="equipoDestacado">
            <strong>Equipo 2</strong>
            <img src="" alt="">
        </div>
    </article><article>
        <div class="equipoDestacado">
            <strong>Equipo 1</strong>
            <img src="" alt="">
        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>
            <h3>84 - 82</h3>
            <a href="#">Highlights</a>
        </div>

        <div class="equipoDestacado">
            <strong>Equipo 2</strong>
            <img src="" alt="">
        </div>
    </article>
    <article>
        <div class="equipoDestacado">
            <strong>Equipo 3</strong>
            <img src="" alt="">
        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>
            <h3>2 - 4</h3>
            <a href="#">Highlights</a>
        </div>

        <div class="equipoDestacado">
            <strong>Equipo 4</strong>
            <img src="" alt="">
        </div>
    </article>

</section>
</main>
@endsection

