@extends('plantilla')

@section('titulo', 'Jugadores')

@section('contenido')

    @vite(['resources/sass/principales/jugadores.scss', 'resources/js/principales/jugadores.js'])
        <section>
            <div class="cab">
                <h2>JUGADORES</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                @auth
                    <input type="button" value="AÑADIR" disabled>
                @endauth
            </div>
            <hr>
            <div class="tarjetas">
                @foreach($jugadores as $jugador)
                    <div class="tarjeta">
                    <div class="contenido" style="background-image: url('{{ asset('images/' . $jugador->foto) }}')">
                        <table>
                            <tr>
                                <th colspan="2">{{ $jugador->nombre }}</th>
                            </tr>
                            <tr>
                                <th>Altura</th>
                                <th>{{ $jugador->altura }}</th>
                            </tr>
                            <tr>
                                <th>Peso</th>
                                <th>{{ $jugador->peso }}</th>
                            </tr>
                            <tr>
                                <th>Edad</th>
                                <th>{{ $jugador->edad }} años</th>
                            </tr>
                            <tr>
                                <th>Experiencia</th>
                                <th>{{ $jugador->experiencia }} años</th>
                            </tr>
                            <tr>
                                <th>Nacionalidad</th>
                                <th>{{ $jugador->nacionalidad }}</th>
                            </tr>
                        </table>
                        <strong>{{ $jugador->puntuacion }}</strong>
                    </div>

                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>
                @endforeach

                <div class="d-flex justify-content-center mt-4">
                    {{ $jugadores->links('pagination::bootstrap-5') }}
                </div>


            </div>
        </section>


@endsection
