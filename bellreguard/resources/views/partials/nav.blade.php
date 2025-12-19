<header>
    <a href="{{ url('/') }}"><img id="logo" src="{{ asset('images/logo_sin_bg.png') }}" alt="logo del club"></a>
    <nav id="navHeadr">
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="#">Liga</a></li>
            <li><a href="#">Partidos</a></li>
            <li><a href="{{ url('/equipos') }}">Equipos</a></li>
            <li><a href="{{ route('jugadores') }}">Jugadores</a></li>
        </ul>
    </nav>
    <img id="perfil" src="{{ asset('images/perfil_default.webp') }}" alt="Default profile picture">
</header>
