@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
@vite(['resources/sass/principales/contacto.scss'])

<main id="contacto-page">

    <div class="cab">
        <h2>CONTACTO</h2>
    </div>
    <hr>

    <section class="contact-wrapper">

        <!-- INFO DEL CLUB -->
        <div class="contact-info">
            <img src="{{ asset('images/logo_sin_bg.png') }}" alt="Logo Club Bellreguard" class="logo-club">
            <h3>Club Bellreguard</h3>
            <p><strong>Email:</strong> <a href="mailto:club@bellreguard.com">club@bellreguard.com</a></p>
            <p><strong>Teléfono:</strong> <a href="tel:+34666666666">+34 666 666 666</a></p>
            <p><strong>Dirección:</strong> Ronda dels Esports, 46713 Bellreguard, Valencia</p>

            <div class="socials">
                <div class="socials">
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- FORMULARIO -->
        <div class="contact-form">
            <h3>Envíanos un mensaje</h3>
            <form id="formContacto" action="mailto:club@bellreguard.com" enctype="text/plain">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo" required>
                </div>

                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" id="asunto" name="asunto" placeholder="Asunto del mensaje" required>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="6" placeholder="Escribe tu mensaje aquí..." required></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar mensaje</button>
            </form>
        </div>

    </section>

    <!-- MAPA -->
    <section class="mapa">
        <h3>Ubicación del Club</h3>
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps?q=Ronda+dels+Esports,+46713+Bellreguard,+Valencia&output=embed"></iframe>
        </div>
    </section>

</main>
@endsection
