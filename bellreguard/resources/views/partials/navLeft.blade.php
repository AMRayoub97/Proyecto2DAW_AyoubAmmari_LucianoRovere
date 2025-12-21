<nav id="navLeft">
    <div id="navIzquierda">
        <ul>
            @auth
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Favoritos</a></li>
            @endauth
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Estadisticas</a></li>
        </ul>
    </div>
    <input type="submit" value="→" id="ocultarNavBtn">
</nav>
