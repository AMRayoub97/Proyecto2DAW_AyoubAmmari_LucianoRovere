<nav id="navLeft">
    <div id="navIzquierda">
        <ul>
            @auth
                <li><a href="{{ route('perfil.show', auth()->user()->id) }}">Perfil</a></li>
            @endauth
            <li><a href="{{ route('tienda.index') }}">Tienda</a></li>
            <li><a href="{{ route('eventos.index') }}">Eventos</a></li>
            <li><a href="{{ route('noticias.index') }}">Noticias</a></li>
            <li><a href="{{ route('estadisticas.index') }}">Estadisticas</a></li>
            @auth
                @if(auth()->user()->role == 'admin')
                     <li><a href="{{ route('permisos.index') }}">Permisos</a></li>
                @endif
            @endauth
        </ul>
    </div>
    <input type="submit" value="→" id="ocultarNavBtn">
</nav>
