@extends('plantilla')

@section('titulo', 'Equipos')

@section('contenido')

    @vite(['resources/sass/principales/equipos.scss','resources/js/principales/equipos.js'])
    <!-- Main-->
        <section>
            <div class="cab">
                <h2>Equipos</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                @auth
                    <input type="button" value="AÑADIR" disabled>
                @endauth
            </div>
            <hr>

            <div class="tarjetas">
                @foreach($equipos as $equipo)
                        <div class="tarjeta">
                            <div class="cont">
                                <img src="{{ asset('/images/equipos/'. $equipo->foto) }}">
                                <strong>0.0</strong>
                            </div>
                            <h3>{{ $equipo->nombre }}</h3>
                            <div class="btnsJugador">
                                <input type="submit" value="Ver Perfil">
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

