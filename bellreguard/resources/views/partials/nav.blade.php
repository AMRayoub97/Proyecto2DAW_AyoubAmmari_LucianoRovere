<header>
    <a href="{{ url('/') }}" class="header-logo">
        <img id="logo" src="{{ asset('images/logo_sin_bg.png') }}" alt="logo">
        <span>Bellreguard</span>
    </a>

    <nav id="navHeadr">
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ route('partidos.index') }}">Partidos</a></li>
            <li><a href="{{ route('equipos.index') }}">Equipos</a></li>
            <li><a href="{{ route('jugadores.index') }}">Jugadores</a></li>
        </ul>
    </nav>

    <div class="perfilOp">
        @auth
            <strong>Hola, {{ auth()->user()->nombre }}</strong>
        @endauth

        @if(empty(auth()->user()?->foto))
            <img id="fotoPerfil" src="{{ asset('/images/perfil_default.webp') }}" alt="foto perfil">
        @else
            <img id="fotoPerfil" src="{{ asset('/images/usuarios/' . auth()->user()->foto) }}" alt="foto perfil">
        @endif

        <ul id="perfilLista">
            @guest
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ route('registrar') }}">Registrarse</a></li>
            @endguest
            @auth
                <li><a href="{{ route('perfil.show', auth()->user()->id) }}">Mi perfil</a></li>
                <li><a href="{{ route('logout') }}">Cerrar sesión</a></li>
            @endauth
        </ul>
    </div>
</header>
