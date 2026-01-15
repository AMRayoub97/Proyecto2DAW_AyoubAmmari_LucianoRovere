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
    <br>
    <h2>Jugando Ahora </h2>
    <br>
</div>
<section id="destacados">

    <article>
        <div class="equipoDestacado">
            <strong>Equipo Local</strong>
            <img src="" alt="">
        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>
            <h3>VS</h3>
        </div>

        <div class="equipoDestacado">
            <strong>Equipo Visit</strong>
            <img src="" alt="">
        </div>
    </article>
      <article>
        <div class="equipoDestacado">
            <strong>Equipo Local</strong>
            <img src="" alt="">
        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>
            <h3>VS</h3>
        </div>

        <div class="equipoDestacado">
            <strong>Equipo Visit</strong>
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
            <h3>VS</h3>
        </div>

        <div class="equipoDestacado">
            <strong>Equipo 4</strong>
            <img src="" alt="">
        </div>
    </article>

</section>
    <div class="cab">
        <h2>Próximos Partidos</h2>
    </div>

<section id="destacados">
    @foreach ($partidos as $partido)
    <article>
        <div class="equipoDestacado">

             <strong>{{$partido->equipo?->nombre}}</strong>
            <img src="{{ asset('images/equipos/'. $partido->equipo?->foto)  }}" alt="{{ $partido->equipo?->nombre }}">

        </div>

        <div class="resultadoDesatacados">
            <small>2026-01-12</small>

            <strong>Próximamente</strong>
        </div>

        <div class="equipoDestacado">
            <strong>{{$partido->equipoVisitante?->nombre}} | {{$partido->equipoVisitante->categoria}}</strong>
            <img src="{{ asset('images/equipos/'. $partido->equipoVisitante?->foto)  }}" alt="{{ $partido->equipoVisitante?->nombre }}">
        </div>
    </article>
    @endforeach
</section>

</main>
@endsection

