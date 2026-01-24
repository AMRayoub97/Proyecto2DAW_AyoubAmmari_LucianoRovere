@extends('plantilla')

@section('titulo', 'Bienvenido')

@section('contenido')

    @vite(['resources/sass/principales/index.scss', 'resources/js/principales/index.js'])

    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

        <section id="principal" class="fade-in">
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

            <div class="destac fade-in">
                <h1>🔥 DESTACADOS HOY</h1>
                <hr>
                <section id="destacados">
                    <!--<article>
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

                    </article> -->
                </section>
            </div>


            <hr>
            <div class="notcias-eventos">
                <div id="noticias" class="fade-in">
                    <a href="{{ route('noticias.index') }}">
                        <h1>ÚLTIMAS NOTICIAS</h1>
                    </a>
                    @forelse($noticias as $noticia)
                        <article>
                            <div class="infoNoticia">
                                <div class="infoUsuarioNoticia">
                                    <a href="{{ route('noticias.tutor', $noticia->tutor?->id) }}">
                                        @if(empty($noticia->tutor?->foto))
                                            <img src="{{ asset('images/perfil_default.webp')}}" alt="autor">
                                        @else
                                            <img src="{{ asset('images/usuarios/' . $noticia->tutor?->foto) }}" alt="fotoUsuaroNoticia" target="_blank">
                                        @endif
                                        <strong>{{ $noticia->tutor?->nombre }}</strong>
                                    </a>
                                </div>
                                <small>{{ $noticia->fecha }}</small>
                            </div>
                            <hr>
                            <a href="{{ route('noticias.show', $noticia->id) }}">
                                <h4>{{ $noticia->titulo }}</h4>
                                <p>{{ $noticia->contenido }}</p>
                            </a>
                        </article>

                    @empty
                        <h1>NO HAY NOTICIAS </h1>
                    @endforelse
                </div>

                <hr>

                <aside class="eventos" class="fade-in">
                    <h2>ÚLTIMOS EVENTOS</h2>
                    <div class="calendario">
                        <iframe src="https://calendar.google.com/calendar/embed?src=84c77a57829987452c49d60bb03eaab97665b000d99116c01f48819584c0168b%40group.calendar.google.com&ctz=Europe%2FMadrid" style="border: 0" frameborder="0" scrolling="no"></iframe>
                    </div>

                    @foreach($eventos as $evento)
                    <div class="event-detailed-card {{ $evento->estado }}">
                        <div class="card-side-info">
                            <div class="date-badge">
                                <span class="day">{{ \Carbon\Carbon::parse($evento->fecha)->format('d') }}</span>
                                <span class="month">{{ strtoupper(\Carbon\Carbon::parse($evento->fecha)->shortMonthName) }}</span>
                            </div>
                            <div class="hour">{{ \Carbon\Carbon::parse($evento->fecha)->format('H:i') }}</div>
                        </div>

                        <div class="card-main-content">
                            <div class="top-bar">
                                <span class="type-label"><strong>Tipo:</strong> {{ $evento->tipo }}</span> |
                                <span class="venue"><strong>Lugar:</strong> {{ $evento->lugar }}</span>
                            </div>

                            <div class="event-body">
                                <h2 class="event-title">{{ $evento->titulo }}</h2>
                                <div class="status-indicator">
                                    <span class="dot"></span> <strong>{{ ucfirst($evento->estado) }}</strong>
                                </div>
                            </div>
                        </div>

                        <div class="card-actions">
                            @if($evento->estado == 'finalizado')
                                <button type="button" class="btn-secondary">finalizado</button>
                            @elseif($evento->estado == 'en_vivo')
                                <button type="button" class="btn-primary live">Seguir en Vivo</button>
                            @else
                                <button type="button" class="btn-primary">Recordatorio</button>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </aside>
            </div>
        </section>
        <hr>

        <!-- Section Contacto -->
        <section id="contacto" class="fade-in">
            <h2>Contacto</h2>
            <div class="contact-cards">
                <a href="mailto:club@bellreguard.com">
                    <div class="contact-card">
                        <i class="fas fa-envelope"></i>
                        <p>club@bellreguard.com</p>
                    </div>
                </a>

                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <p>+34 666 666 666</p>
                </div>

                <a href="https://www.google.com/maps/place/B%C3%A0squet+Bellreguard/@38.945799,-0.164671,15z/data=!4m6!3m5!1s0xd61e95831d10e71:0xc5e8c385690cab09!8m2!3d38.9453653!4d-0.1651862!16s%2Fg%2F11v189t9xf?hl=es&entry=ttu&g_ep=EgoyMDI2MDEyMS4wIKXMDSoKLDEwMDc5MjA3MUgBUAM%3D" target="_blank">
                    <div class="contact-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Ronda dels Esports, 46713 Bellreguard, Valencia</p>
                    </div>
                </a>
            </div>
        </section>
        <hr>

        <!-- Section Mapa -->
        <section id="mapa" class="fade-in">
            <h2>Ubicación</h2>
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12412.256168226008!2d-0.18424061284180604!3d38.945365300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61e95831d10e71%3A0xc5e8c385690cab09!2sB%C3%A0squet%20Bellreguard!5e0!3m2!1ses!2ses!4v1769283250905!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>



@endsection
