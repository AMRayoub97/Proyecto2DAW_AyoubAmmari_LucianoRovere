@extends('plantilla')

@section('titulo', 'Equipos')

@section('contenido')

    @vite(['resources/sass/principales/equipos.scss','resources/js/principales/equipos.js'])

    <!-- Main-->
        <section>
            <div class="cab">
                <h2>JUGADORES</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                @auth
                    <a href="{{ route('equipos.create') }}">AÑADIR</a>
                @endauth
            </div>
            <hr>
            <!-- mensajes -->
             @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

            <div class="tarjetas">
                @foreach($equipos as $equipo)
                        <div class="tarjeta">
                            <div class="cont">
                                <img src="{{ asset('/images/equipos/'. $equipo->foto) }}">
                                <strong>0.0</strong>
                            </div>
                            <h3>{{ $equipo->nombre }}</h3>
                            <div class="btnsJugador">
                                <a href="{{ route('equipos.show', $equipo->id) }}"> Ver Perfil</a>
                                <a href="#">⭐</a>
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4" id="paginas">
                {{ $equipos->links('pagination::bootstrap-5') }}
            </div>



        </section>
@endsection

