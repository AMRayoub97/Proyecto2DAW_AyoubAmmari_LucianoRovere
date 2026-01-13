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
                <div id="noticias">
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

                <aside class="eventos">
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

@endsection
