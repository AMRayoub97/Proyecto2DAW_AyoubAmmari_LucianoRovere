@extends('plantilla')

@section('titulo', 'Equipos')

@section('contenido')

    @vite(['resources/sass/principales/equipos.scss','resources/js/principales/equipos.js'])

    <!-- Main-->
        <section>
            <div class="cab">
                <h2>EQUIPOS</h2>

                <div id="barra_busqueda">
                    <input type="text" id="busqueda" placeholder="Buscar por nombre ....">
                    <ul id="sug_busqueda">

                    </ul>
                </div>


                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                <div class="filtros">
                    @auth
                        @if(auth()->user()?->role == 'admin')
                            <a href="{{ route('equipos.create') }}" class="btn-add">AÑADIR</a>
                        @endif
                    @endauth

                    <div class="dropdown">
                        <span class="dropdown-toggle" id="toggleFiltro">
                            FILTRAR POR ▾
                        </span>

                        <ul class="dropdown-menu" id="menuFiltro">
                            <li>
                                <a href="{{ route('equipos.index') }}">Todos</a>
                            </li>

                            @foreach($categor as $cat)
                                <li>
                                    <a href="{{ route('equipos.index', ['categoria' => $cat]) }}">
                                        {{ $cat }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
            <hr>
            <!-- mensajes -->
             @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session()->has('danger'))
                    <div class="alert alert-danger" role="alert">
                    {{ session('danger') }}
                </div>
                @endif

            <h2>Equipos locales:</h2>
            <div class="tarjetas">
                @foreach($equipos as $equipo)
                <div class="tarjeta">
                    <div class="cont">
                        <div class="lista">
                            @auth
                             @if(auth()->user()?->role == 'admin')
                            <img src="{{ asset('images/lista.png') }}" alt="lista" class="listaEditar">
                            <ul class="listaUl">
                                <li><a href="{{ route('equipos.edit', $equipo->id) }}">Editar</a></li>
                                <hr>
                                <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <li><button name="borrar" >Borrar</button></li>
                                </form>
                            </ul>
                            @endif
                            @endauth

                        </div>

                        <img src="{{ asset('/images/equipos/'. $equipo->foto) }}" id="fotoEquipo">
                        <strong>0.0</strong>
                    </div>

                    <h3>{{ $equipo->nombre }}</h3>
                    <div class="inf">
                        <strong>{{ $equipo->categoria }}</strong>
                        <strong>{{ $equipo->genero }}</strong>
                    </div>

                    <div class="btnsJugador">
                        <a href="{{ route('equipos.show', $equipo->id) }}">Ver Perfil</a>
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

