@extends('plantilla')
@section('titulo', 'Tienda')

@section('contenido')

    @vite(['resources/sass/principales/tienda.scss','resources/js/principales/tienda.js'])
<section>
    <div class="cab">
        <h2>Tienda</h2>
        <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
        @auth
            <input type="button" value="AÑADIR" disabled>
        @endauth
    </div>
    <hr>

    <div class="tarjetas">
            
    </div>
</section>
@endsection
