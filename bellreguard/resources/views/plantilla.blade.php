<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bellreguard Club | @yield('titulo')</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<!-- Menú -->
@include('partials.nav')
@include('partials.navLeft')

<main>
    @yield('contenido')
</main>

@include('partials.footer')
</body>
</html>
