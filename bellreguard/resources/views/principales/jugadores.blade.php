@extends('plantilla')

@section('titulo', 'Jugadores')

@section('contenido')

    @vite(['resources/sass/principales/jugadores.scss', 'resources/js/principales/jugadores.js'])
        <section>
            <div class="cab">
                <h2>JUGADORES</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                <input type="button" value="AÑADIR" disabled>
            </div>
            <hr>
            <div class="tarjetas">
                @for($i = 0 ; $i < 8 ; $i++)
                <div class="tarjeta">
                    <div class="contenido" style="background-image: url('{{ asset('images/pistap.jpg') }}')">
                        <table>
                            <tr>
                                <th colspan="2">Nombre</th>
                            </tr>
                            <tr>
                                <th>Altura</th>
                                <th>0.0</th>
                            </tr>
                            <tr>
                                <th>Peso</th>
                                <th>0 Kg</th>
                            </tr>
                            <tr>
                                <th>Edad</th>
                                <th>0 años</th>
                            </tr>
                            <tr>
                                <th>Experiencia</th>
                                <th>0 años</th>
                            </tr>
                            <tr>
                                <th>Pais</th>
                                <th>ESP</th>
                            </tr>
                        </table>
                        <strong>0.0</strong>
                    </div>

                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>
                @endfor
            </div>
        </section>


@endsection
