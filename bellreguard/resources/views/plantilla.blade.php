<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Página oficial del grupo de baloncesto Bellreguard. Noticias, resultados, equipo y eventos de nuestro club de baloncesto.">
   <meta name="keywords" content="Baloncesto Bellreguard, equipo de baloncesto, liga local, resultados, eventos de baloncesto, noticias de baloncesto, bellreguard">
   <meta name="author" content="Ayoub Luciano">
   <meta property="og:title" content="Baloncesto Bellreguard - Página Oficial">
  <meta property="og:description" content="Sigue todas las novedades del equipo de baloncesto Bellreguard: noticias, resultados y eventos.">
  <meta property="og:image" content="{{ asset('images/logo_sin_bg.png') }}">
  <meta property="og:url" content="https://clubellreguard.es/">
  <meta property="og:type" content="website">
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
