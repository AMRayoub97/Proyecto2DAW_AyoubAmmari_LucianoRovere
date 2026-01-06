<nav id="navLeft">
    <div id="navIzquierda">
        <ul>
            @auth
                <li><a href="{{ route('perfil', auth()->user()->id) }}">Perfil</a></li>
                <li><a href="#">Favoritos</a></li>
            @endauth
            <li><a href="{{ route('tienda') }}">Tienda</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="{{ route('noticias') }}">Noticias</a></li>
            <li><a href="#">Estadisticas</a></li>
        </ul>
    </div>
    <input type="submit" value="→" id="ocultarNavBtn">
</nav>
