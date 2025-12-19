@extends('plantilla')

@section('titulo', 'Equipos')

@section('contenido')

    @vite(['resources/sass/principales/equipos.scss','resources/js/principales/equipos.js'])
    <!-- Main-->
        <section>
            <div class="cab">
                <h2>Equipos</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                <input type="button" value="AÑADIR" disabled>
            </div>
            <hr>
            <div class="tarjetas">
                <div class="tarjeta">
                    <div class="cont">
                        <img src="{{ asset('/images/pistap.jpg') }}">
                        <strong>0.0</strong>
                    </div>
                    <h3>Nombre Equipos</h3>
                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>

                <div class="tarjeta">
                    <div class="cont">
                        <img src="{{ asset('/images/pistap.jpg') }}">
                        <strong>0.0</strong>
                    </div>
                    <h3>Nombre Equipos</h3>
                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>

                <div class="tarjeta">
                    <div class="cont">
                        <img src="{{ asset('/images/pistap.jpg') }}">
                        <strong>0.0</strong>
                    </div>
                    <h3>Nombre Equipos</h3>
                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>

                <div class="tarjeta">
                    <div class="cont">
                        <img src="{{ asset('/images/pistap.jpg') }}">
                        <strong>0.0</strong>
                    </div>
                    <h3>Nombre Equipos</h3>
                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>

                <div class="tarjeta">
                    <div class="cont">
                        <img src="{{ asset('/images/pistap.jpg') }}">
                        <strong>0.0</strong>
                    </div>
                    <h3>Nombre Equipos</h3>
                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>

                <div class="tarjeta">
                    <div class="cont">
                        <img src="{{ asset('/images/pistap.jpg') }}">
                        <strong>0.0</strong>
                    </div>
                    <h3>Nombre Equipos</h3>
                    <div class="btnsJugador">
                        <input type="submit" value="Ver Perfil">
                        <a href="#">⭐</a>
                    </div>
                </div>
            </div>
        </section>
@endsection

