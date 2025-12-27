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
        <article>
            <img src="{{ asset('images/logo.png') }}" alt="fotoProducto">
            <div class="info">
                <h2>Nombre</h2>
                <div class="detalle">
                    <strong>0.99$</strong>
                    <small>Cantidad: 0</small>
                </div>
            </div>
            <a href="">Buy</a>
        </article>
         <article>
            <img src="{{ asset('images/logo.png') }}" alt="fotoProducto">
            <div class="info">
                <h2>Nombre</h2>
                <div class="detalle">
                    <strong>0.99$</strong>
                    <small>Cantidad: <strong>0</strong></small>
                </div>
            </div>
            <a href="">Buy</a>
        </article>
         <article>
            <img src="{{ asset('images/logo.png') }}" alt="fotoProducto">
            <div class="info">
                <h2>Nombre</h2>
                <div class="detalle">
                    <strong>0.99$</strong>
                    <small>Cantidad: 0</small>
                </div>
            </div>
            <a href="">Buy</a>
        </article>
         <article>
            <img src="{{ asset('images/logo.png') }}" alt="fotoProducto">
            <div class="info">
                <h2>Nombre</h2>
                <div class="detalle">
                    <strong>0.99$</strong>
                    <small>Cantidad: 0</small>
                </div>
            </div>
            <a href="">Buy</a>
        </article>
    </div>
</section>
@endsection
