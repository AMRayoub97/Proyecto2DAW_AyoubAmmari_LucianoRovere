<header>
    <a href="{{ url('/') }}"><img id="logo" src="{{ asset('images/logo_sin_bg.png') }}" alt="logo del club"></a>
    <nav id="navHeadr">
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{route('partidos.index')}}">Partidos</a></li>
            <li><a href="{{ route('equipos.index') }}">Equipos</a></li>
            <li><a href="{{ route('jugadores.index') }}">Jugadores</a></li>
        </ul>
    </nav>
    <div class="perfilOp">
        @auth
            <strong>Hola, {{ auth()->user()->nombre }}</strong>
        @endauth

            @if(empty(auth()->user()->foto))
                <img id="fotoPerfil" src="{{asset('/images/perfil_default.webp') }}" alt="Default profile picture">
            @else
                <img id="fotoPerfil" src="{{ asset('/images/usuarios/'. auth()->user()->foto) }}" alt="Default profile picture">
            @endif

        <ul id="perfilLista">
            @guest
                <li><a href="{{ route('login') }}">Iniciar session</a></li>
                <li><a href="{{ route('registrar') }}">Registrar</a></li>
            @endguest
            @auth
                <li><a href="{{ route('perfil.show', auth()->user()->id) }}">Perfil</a></li>
                <li><a href="{{ route('logout') }}">cerrar session</a></li>
            @endauth
        </ul>
    </div>
</header>
