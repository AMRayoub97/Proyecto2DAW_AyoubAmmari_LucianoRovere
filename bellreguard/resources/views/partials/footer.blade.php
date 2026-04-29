<footer>
    <div class="footer-top">
        <div class="footer-brand">
            <img src="{{ asset('images/logo_sin_bg.png') }}" alt="Logo Bellreguard">
            <strong>Club Baloncesto Bellreguard</strong>
            <p>Pasión, esfuerzo y equipo. Formando jugadores y personas desde el primer día.</p>
        </div>

        <div class="footer-nav">
            <span>Navegación</span>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ route('partidos.index') }}">Partidos</a></li>
                <li><a href="{{ route('equipos.index') }}">Equipos</a></li>
                <li><a href="{{ route('jugadores.index') }}">Jugadores</a></li>
                <li><a href="{{ route('noticias.index') }}">Noticias</a></li>
                <li><a href="{{ route('tienda.index') }}">Tienda</a></li>
            </ul>
        </div>

        <div class="footer-redes">
            <span>Síguenos</span>
            <ul>
                <li>
                    <img src="{{ asset('images/instaLogo.png') }}" alt="Instagram">
                    <a href="https://www.instagram.com/">Instagram</a>
                </li>
                <li>
                    <img src="{{ asset('images/facebookLogo.png') }}" alt="Facebook">
                    <a href="https://www.facebook.com/">Facebook</a>
                </li>
                <li>
                    <img src="{{ asset('images/gmailLogo.png') }}" alt="Correo">
                    <a href="mailto:contacto@bellreguard.es">Correo</a>
                </li>
            </ul>
        </div>

        <div class="footer-contacto">
            <span>Contacto</span>
            <ul>
                <li>📍 Bellreguard, Valencia, España</li>
                <li>📞 <a href="tel:+34600000000">+34 600 000 000</a></li>
                <li>✉️ <a href="mailto:contacto@bellreguard.es">contacto@bellreguard.es</a></li>
                <li>🕐 Lun - Vie: 9:00 - 20:00</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© {{ date('Y') }} Club Baloncesto Bellreguard. Todos los derechos reservados.</p>
        <ul>
            <li><a href="#">Aviso legal</a></li>
            <li><a href="#">Política de Privacidad</a></li>
            <li><a href="{{ route('cookies') }}">Política de Cookies</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
        </ul>
    </div>
</footer>
