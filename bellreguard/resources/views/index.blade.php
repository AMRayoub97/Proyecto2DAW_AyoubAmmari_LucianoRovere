@extends('plantilla')

@section('titulo', 'Bienvenido')

@section('contenido')

    @vite(['resources/sass/principales/index.scss', 'resources/js/principales/index.js'])


        <section id="principal">
            <div id="banner">
                <h1>Bienvenido al Club Bellreguard<br>LA VICTORIA ES NUESTRA</h1>
                <div class="scroll-wrapper">
                    <div class="scroll">
                        <div class="slide">
                            <img src="{{ asset('images/banner2.jpg') }}" alt="imgScroll1">
                            <div class="slide-text">Pasión y Fuerza en Cada Partido</div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/scroll1.jpg') }}" alt="imgScroll2">
                            <div class="slide-text">Entrena, Lucha, Gana</div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/scroll2.jpg') }}" alt="imgScroll3">
                            <div class="slide-text">Juntos Somos Invencibles</div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/scroll3.jpg') }}" alt="imgScroll4">
                            <div class="slide-text">Espíritu de Equipo</div>
                        </div>
                        <div class="slide">
                            <img src="{{ asset('images/scroll4.jfif') }}" alt="imgScroll5">
                            <div class="slide-text">Únete a Nuestra Familia</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="destac">
                <h1 class="titulo">🔥 DESTACADOS HOY</h1>
                <hr>
                <section id="destacados">
                    <article>
                        <div class="equipoDestacado">
                            <strong>VLC</strong>
                             <a href="#">
                            <img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>

                        <div class="resultadoDesatacados">
                            <h3>2 - 0</h3>
                            <a href="#">Highlights</a>
                        </div>

                        <div class="equipoDestacado">
                        <strong>BAR </strong>
                            <a href="#">
                            <img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>

                    </article>
                    <article>
                        <div class="equipoDestacado">
                            <strong>OCK</strong>
                            <a href="#">
                            <img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>

                        <div class="resultadoDesatacados">
                            <h3>11/12/2025</h3>
                            <h3>17:00</h3>
                            <a href="#">Highlights</a>
                        </div>

                        <div class="equipoDestacado">
                        <strong>VLC</strong>
                            <a href="#">
                            <img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>

                    </article>
                    <article>
                        <div class="equipoDestacado">
                            <strong>MAR</strong>
                            <a href="#">
                            <img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>

                        <div class="resultadoDesatacados">
                            <h3>0 - 0</h3>
                            <a href="#">Highlights</a>
                        </div>

                        <div class="equipoDestacado">
                        <strong>ESP </strong>
                            <a href="#">
                        <img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>

                    </article>
                </section>
            </div>

            <h1 class="titulo">ÚLTIMAS NOTICIAS</h1>
            <div id="noticias">
                <div style="background-image: url('{{ asset('images/Graffiti_Court_Chronicles.jpeg') }}');">
                    <h2 class="titulo">Título</h2>
                    <strong class="titulo">2025-01-12</strong>
                </div>
                <div style="background-image: url('{{ asset('images/Graffiti_Court_Chronicles.jpeg') }}');">
                    <h2 class="titulo">Título</h2>
                    <strong class="titulo">2025-01-12</strong>
                </div>
                <div style="background-image: url('{{ asset('images/Graffiti_Court_Chronicles.jpeg') }}');">
                    <h2 class="titulo">Título</h2>
                    <strong class="titulo">2025-01-12</strong>
                </div>
            </div>

        </section>

@endsection
