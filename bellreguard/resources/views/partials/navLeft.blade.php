<nav id="navLeft">
    <div id="navIzquierda">
        <ul>
            @auth
                <li>
                    <a href="{{ route('perfil.show', auth()->user()->id) }}" aria-label="Perfil">
                        <i class="bi bi-person-circle" aria-hidden="true"></i>
                        <span>Perfil</span>
                    </a>
                </li>
            @endauth
            <li>
                <a href="{{ route('tienda.index') }}" aria-label="Tienda">
                    <i class="bi bi-bag" aria-hidden="true"></i>
                    <span>Tienda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('eventos.index') }}" aria-label="Eventos">
                    <i class="bi bi-calendar-event" aria-hidden="true"></i>
                    <span>Eventos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('noticias.index') }}" aria-label="Noticias">
                    <i class="bi bi-newspaper" aria-hidden="true"></i>
                    <span>Noticias</span>
                </a>
            </li>
            <li>
                <a href="{{ route('estadisticas.index') }}" aria-label="Estadisticas">
                    <i class="bi bi-bar-chart" aria-hidden="true"></i>
                    <span>Estadisticas</span>
                </a>
            </li>
            @auth
                @if(auth()->user()->role == 'admin')
                    <li>
                        <a href="{{ route('permisos.index') }}" aria-label="Permisos">
                            <i class="bi bi-shield-lock" aria-hidden="true"></i>
                            <span>Permisos</span>
                        </a>
                    </li>
                @endif
            @endauth
        </ul>
    </div>
    <input type="submit" value="&#8594;" id="ocultarNavBtn">
</nav>
