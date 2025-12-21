<header>
    <a href="{{ url('/') }}"><img id="logo" src="{{ asset('images/logo_sin_bg.png') }}" alt="logo del club"></a>
    <nav id="navHeadr">
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="#">Liga</a></li>
            <li><a href="#">Partidos</a></li>
            <li><a href="{{ route('equipos') }}">Equipos</a></li>
            <li><a href="{{ route('jugadores') }}">Jugadores</a></li>
        </ul>
    </nav>
    <div class="perfilOp">
        <img id="fotoPerfil" src="{{ asset('images/perfil_default.webp') }}" alt="Default profile picture">
        <ul id="perfilLista">
            @guest
                <li><a href="{{ route('login') }}">Iniciar session</a></li>
                <li><a href="{{ route('registrar') }}">Registrar</a></li>
            @endguest
            @auth
                <li><a href="">Perfil</a></li>
                <li><a href="{{ route('logout') }}">cerrar session</a></li>
            @endauth
        </ul>
    </div>
</header>
