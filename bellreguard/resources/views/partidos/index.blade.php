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

    <!--
        CREAR CONDICION IF,
        SI la fecha del partido es igual a la de hoy: Mostrar en "Jugando ahora"
        SI es mayor:Mostrar en "Próximos partidos"
    -->
   @if ($fecha = $partidosHoy)


    <div class="cab">
        <br>
        <h2>Jugando Ahora </h2>
        <br>
    </div>
    <section id="destacados">
        @foreach ($partidosHoy as $partido)
        <a href="{{ route('partidos.show', $partido->id) }}">
            <article>
                <div class="equipoDestacado">
                    <strong>{{$partido->equipo?->nombre}}</strong>
                    <img src="{{asset('images/equipos/'. $partido->equipo?->foto)}}" alt="{{$partido->equipo?->nombre}}">
                </div>

                <div class="resultadoDesatacados">
                    <small>{{$partido->fecha}}</small>
                    <h3>VS</h3>
                </div>

                <div class="equipoDestacado">
                    <strong>{{$partido->equipoVisitante?->nombre}} | {{$partido->equipoVisitante->categoria}}</strong>
                    <img src="{{asset('images/equipos/'. $partido->equipoVisitante?->foto)}}" alt="{{$partido->equipoVisitante?->nombre}}">
                </div>
            </article>
        </a>
        @endforeach
    </section>
    @endif
    <div class="cab">
        <h2>Próximos Partidos</h2>
    </div>

    <section id="destacados">
        @foreach ($partidosProximos as $partido)
        <a href="{{ route('partidos.show', $partido->id) }}">
        <article>
            <div class="equipoDestacado">

                <strong>{{$partido->equipo?->nombre}}</strong>
                <img src="{{asset('images/equipos/'. $partido->equipo?->foto)}}" alt="{{$partido->equipo?->nombre}}">

            </div>

            <div class="resultadoDesatacados">
                <small>{{$partido->fecha}}</small>

                <strong>Próximamente</strong>
            </div>

            <div class="equipoDestacado">
                <strong>{{$partido->equipoVisitante?->nombre}} | {{$partido->equipoVisitante->categoria}}</strong>
                <img src="{{asset('images/equipos/'. $partido->equipoVisitante?->foto)}}" alt="{{$partido->equipoVisitante?->nombre}}">
            </div>
        </article>
        </a>
        @endforeach
    </section>

</main>
@endsection

