@extends('plantilla')

@section('titulo', 'Producto')

@section('contenido')

    @vite(['resources/sass/principales/producto.scss','resources/js/principales/producto.js'])

    <div class="contenido">
        <section class="producto-image">
            <img src="{{ asset('images/'. $producto->foto) }}" alt="Imagen del producto">
        </section>
        <aside class="info-producto">
            <div class="titulo">
                <h1>{{ $producto->nombre }}</h1>
                @for($i = 0; $i < $producto->rate; $i++)
                    <strong>⭐</strong>
                @endfor
            </div>
            <hr>

            <p>{{ $producto->descripcion }}</p>
            <strong>Categoria: {{ $producto->categoria }}</strong>

            <div class="categoria">
                <strong>Cantidad: {{ $producto->cantidad }} disponibles</strong>
                <strong>{{ $producto->precio }} $</strong>
            </div>
            <a href="#">COMPRAR AHORA</a>
        </aside>
    </div>

    <div class="comentarios">
        <aside class="comentarios-lista">
            <h2>Opiniones de clientes</h2>
                @forelse($producto->comentarios as $comentario)
                    <div class="comentario">
                        <div class="cabComentario">
                            <div class="datosComentador">
                                @if(!empty($comentario->usuario?->foto))
                                    <img src="{{ asset('images/usuarios'.$comentario->usuario?->foto) }}" alt="fotoComentador">
                                @else
                                    <img src="{{ asset('images/usuarios/perfil_default.webp') }}" alt="fotoComentador">
                                @endif
                                <strong>{{ $comentario->usuario?->nombre }}</strong>
                            </div>
                            @for($i = 0; $i < $comentario->puntuacion; $i++)
                                <strong>⭐</strong>
                            @endfor
                        </div>
                        <p>{{ $comentario->contenido }}</p>
                    </div>
                @empty
                    <h3>No hay Comentarios</h3>
                @endforelse
        </aside>

        <section class="anadirComentario">
            <h3>Deja tu comentario</h3>
            @auth
                <form action="{{ route('comentario.store') }}" class="form-comentario" method="POST">
                    @csrf
                    <div class="grupo-input">
                        <label for="puntuacion">Tu puntuación:</label>
                        <select name="puntuacion" id="puntuacion">
                            <option value="5">⭐⭐⭐⭐⭐ (Excelente)</option>
                            <option value="4">⭐⭐⭐⭐ (Muy bueno)</option>
                            <option value="3">⭐⭐⭐ (Bueno)</option>
                            <option value="2">⭐⭐ (Regular)</option>
                            <option value="1">⭐ (Malo)</option>
                        </select>
                        @error('puntucacion')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">

                    @error('producto_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        @error('usuario_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    <div class="grupo-input">
                        <label for="contenido">Comentario:</label>
                        <textarea name="contenido" id="contenido" rows="5" placeholder="Cuéntanos tu experiencia con el producto..."></textarea>
                    </div>
                    @error('contenido')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    <button type="submit" class="btn-enviar">PUBLICAR RESEÑA</button>
                </form>
            @endauth
            @guest
                 <form action="{{ route('login') }}" class="form-comentario" >
                    <div class="grupo-input">
                        <label for="puntuacion">Tu puntuación:</label>
                        <select name="puntuacion" id="puntuacion">
                            <option value="5">⭐⭐⭐⭐⭐ (Excelente)</option>
                            <option value="4">⭐⭐⭐⭐ (Muy bueno)</option>
                            <option value="3">⭐⭐⭐ (Bueno)</option>
                            <option value="2">⭐⭐ (Regular)</option>
                            <option value="1">⭐ (Malo)</option>
                        </select>
                    </div>

                    <input type="hidden" value="{{ $producto->id }}" name="producto_id">
                    <div class="grupo-input">
                        <label for="contenido">Comentario:</label>
                        <textarea name="contenido" id="contenido" rows="5" placeholder="Cuéntanos tu experiencia con el producto..."></textarea>
                    </div>

                    <button type="submit" class="btn-enviar">PUBLICAR RESEÑA</button>
                </form>
            @endguest

        </section>
    </div>

@endsection
