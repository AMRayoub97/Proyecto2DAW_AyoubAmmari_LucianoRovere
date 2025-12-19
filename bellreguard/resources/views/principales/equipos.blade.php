@extends('plantilla')

@section('titulo', 'Equipos')

@section('contenido')

    @vite(['resources/sass/principales/equipos.scss','resources/js/principales/equipos.js'])
    <!-- Main-->
    <main>
        <nav>
            <ul>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Favoritos</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Estadisticas</a></li>
            </ul>
            <input type="submit" value="→" id="ocultarNavBtn">
        </nav>
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
    </main>
@endsection

