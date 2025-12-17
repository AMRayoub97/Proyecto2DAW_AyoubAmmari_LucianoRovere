@extends('plantilla')

@section('titulo', 'Bienvenido')

@section('contenido')

    @vite(['resources/sass/index.scss', 'resources/js/app.js'])

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
                    <article class="des">
                        <a href="#"><strong>Real</strong><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        <div class="resultadoDesatacados">
                            <h3>2 - 0</h3>
                            <a href="#">Highlights</a>
                        </div>
                    </article>
                    <article class="des">
                        <a href="#"><strong>OCK</strong><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        <div class="resultadoDesatacados">
                            <h3>11/12/2025</h3>
                            <h3>17:00</h3>
                            <a href="#">Highlights</a>
                        </div>
                    </article>
                    <article class="des">
                        <a href="#"><strong>MAR</strong><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        <div class="resultadoDesatacados">
                            <h3>0 - 0</h3>
                            <a href="#">Highlights</a>
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
    </main>

@endsection
