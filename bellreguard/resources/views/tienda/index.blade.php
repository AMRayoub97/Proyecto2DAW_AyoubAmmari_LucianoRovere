@extends('plantilla')
@section('titulo', 'Tienda')

@section('contenido')

    @vite(['resources/sass/principales/tienda.scss'])
<section>
    <div class="cab">
        <h2>Tienda</h2>
        <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
        @auth
            <a href="{{ route('tienda.create') }}"> AÑADIR </a>
        @endauth
    </div>
    <hr>

    <div class="tarjetas">
        @forelse($productos as $producto)
            <article>
                <img src="{{ asset('images/'. $producto->foto) }}" alt="fotoProducto">
                <div class="info">
                    <h2>{{ $producto->nombre }}</h2>
                    <div class="detalle">
                        <strong>Precio:{{ $producto->precio }} $</strong>
                        <small>Cantidad: <strong> {{ $producto->cantidad }}</strong></small>
                    </div>
                </div>
                <a href="{{ route('tienda.show', $producto->id) }}">Buy</a>
            </article>
        @empty
            <h2>No hay Productos</h2>
        @endforelse
    </div>
    {{ $productos->links('pagination::bootstrap-5') }}
</section>
@endsection
