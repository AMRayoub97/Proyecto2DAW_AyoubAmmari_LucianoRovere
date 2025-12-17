<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bellreguard Club | @yield('titulo')</title>
  <!--- <link rel="stylesheet" href="{\{ asset(\'css/style.css\) }}"> -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<!-- Menú -->
@include('partials.nav')


@yield('contenido')

@include('partials.footer')
</body>
</html>
