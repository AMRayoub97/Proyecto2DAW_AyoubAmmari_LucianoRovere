<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bellreguard Club | @yield('titulo')</title>
  <link rel="icon" href="{{ asset('images/logo_sin_bg.png') }}" type="image/png">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<!-- Menú -->
@include('partials.nav')
@include('partials.navLeft')

<main>
    @yield('contenido')
</main>

<div id="cookie-banner" class="cookie-banner">
  <p>
    Utilizamos cookies propias y de terceros para mejorar tu experiencia.
    <a href="{{ route('cookies') }}">Más información</a>
  </p>
  <div class="cookie-buttons">
    <button id="accept-cookies">Aceptar</button>
    <button id="reject-cookies">Rechazar</button>
  </div>
</div>

@include('partials.footer')
</body>
</html>
