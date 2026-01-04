@extends('plantilla')

@section('titulo', 'Política de Cookies')

@section('contenido')

    @vite(['resources/sass/principales/cookies.scss'])

    <section class="cookies-page">
        <h1>Política de Cookies</h1>

        <p>
            En <strong>Bellreguard Club</strong> utilizamos cookies para garantizar el correcto
            funcionamiento del sitio web y mejorar la experiencia del usuario.
        </p>

        <h2>¿Qué son las cookies?</h2>
        <p>
            Las cookies son pequeños archivos de texto que se almacenan en su dispositivo
            cuando visita una página web. Sirven para recordar información sobre su visita.
        </p>

        <h2>Tipos de cookies que utilizamos</h2>
        <ul>
            <li>
                <strong>Cookies técnicas:</strong> necesarias para el funcionamiento básico
                del sitio web y el acceso a áreas seguras.
            </li>
            <li>
                <strong>Cookies de personalización:</strong> recuerdan preferencias del usuario
                como idioma o configuración.
            </li>
            <li>
                <strong>Cookies de análisis:</strong> nos ayudan a comprender cómo los usuarios
                interactúan con el sitio (si se activan).
            </li>
        </ul>

        <h2>Gestión de cookies</h2>
        <p>
            Puede aceptar o rechazar las cookies desde el banner inicial.
            Además, puede configurar su navegador para bloquear o eliminar las cookies.
        </p>

        <h2>Desactivación de cookies</h2>
        <p>
            A continuación, enlaces a la gestión de cookies en los navegadores más comunes:
        </p>

        <ul>
            <li>Google Chrome</li>
            <li>Mozilla Firefox</li>
            <li>Microsoft Edge</li>
            <li>Safari</li>
        </ul>

        <h2>Contacto</h2>
        <p>
            Si tiene dudas sobre nuestra política de cookies, puede contactar con nosotros
            a través de los canales oficiales del club.
        </p>
    </section>
@endsection
