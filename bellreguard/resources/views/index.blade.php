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
                <h1>🔥 DESTACADOS HOY</h1>
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


            <hr>
            <div class="notcias-eventos">
                <div id="noticias">
                    <h1>ÚLTIMAS NOTICIAS</h1>
                    <article>
                        <div class="infoNoticia">
                            <div class="infoUsuarioNoticia">
                                <a href="#">
                                    <img src="{{ asset('images/perfil_default.webp') }}" alt="fotoUsuaroNoticia" target="_blank">
                                    <strong>Joan Barber Molió</strong>
                                </a>
                            </div>
                            <small>2025-01-12</small>
                        </div>
                        <hr>
                        <a href="#">
                            <p>El jugador del equipo nacional de baloncesto firmó un contrato histórico que lo convierte en uno de los deportistas mejor pagados del país.</p>
                        </a>
                    </article>
                    <article>
                        <div class="infoNoticia">
                            <div class="infoUsuarioNoticia">
                                <a href="https://www.fcbarcelona.es/es/baloncesto/primer-equipo/staff/4401539/xavi-pascual" target="_blank">
                                    <img src="{{ asset('images/entrenadores/XaviPascual.avif') }}" alt="fotoUsuaroNoticia">
                                    <strong>Xavi Pascual</strong>
                                </a>
                            </div>
                            <small>2025-01-12</small>
                        </div>
                        <hr>
                        <a href="#">
                            <p>El torneo juvenil de baloncesto concluyó este fin de semana, destacando el talento emergente de jóvenes promesas que podrían llegar a la liga profesional.</p>
                        </a>
                    </article>
                    <article>
                        <div class="infoNoticia">
                            <div class="infoUsuarioNoticia">
                                <a href="https://www.realmadrid.com/es-ES/baloncesto/primer-equipo/plantilla/sergio-scariolo" target="_blank">
                                    <img src="{{ asset('images/entrenadores/Sergio-Scariolo.png') }}" alt="fotoUsuaroNoticia">
                                    <strong>Sergio Scariolo</strong>
                                </a>
                            </div>
                            <small>2025-01-12</small>
                        </div>
                        <hr>
                        <a href="#">
                            <p>El estadio principal de la ciudad será sede de un partido internacional de baloncesto, atrayendo a fanáticos y medios de comunicación de todo el mundo.</p>
                        </a>
                    </article>
                </div>

                <hr>

                <aside class="eventos">
                    <h2>ÚLTIMOS EVENTOS</h2>
                    <div class="calendario">
                        <iframe src="https://calendar.google.com/calendar/embed?src=84c77a57829987452c49d60bb03eaab97665b000d99116c01f48819584c0168b%40group.calendar.google.com&ctz=Europe%2FMadrid" style="border: 0" frameborder="0" scrolling="no"></iframe>
                    </div>
                    <article>
                        <div class="infoEvento">
                            <div class="infoUsuarioEvento">
                                <a href="#"  target="_blank">
                                    <img src="{{ asset('images/perfil_default.webp') }}" alt="fotoUsuaroNoticia">
                                    <strong>Ayoub</strong>
                                </a>
                            </div>
                            <small>2025-01-12</small>
                        </div>
                        <hr>
                        <a href="#">
                            <p>La final del torneo de baloncesto fue emocionante, con ambos equipos mostrando gran habilidad y estrategia, culminando en un marcador ajustado que mantuvo a los aficionados al borde de sus asientos.</p>
                        </a>
                    </article>
                    <article>
                        <div class="infoEvento">
                            <div class="infoUsuarioEvento">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/perfil_default.webp') }}" alt="fotoUsuaroNoticia">
                                    <strong>Luciano</strong>
                                </a>
                            </div>
                            <small>2025-01-12</small>
                        </div>
                        <hr>
                        <a href="#">
                         <p>El equipo local logró una impresionante victoria en el campeonato de baloncesto, destacando la actuación de su base estrella con triples decisivos en los últimos minutos.</p>
                        </a>
                    </article>
                </aside>
            </div>

        </section>

@endsection
