@extends('plantilla')

@section('titulo', 'Producto')

@section('contenido')

    <script>
        const id_producto = @json($id);
    </script>

    @vite(['resources/sass/principales/producto.scss','resources/js/principales/producto.js'])

    <div class="contenido">
        <!-- Cargar el producto desde js-->
    </div>

    <div class="comentarios">
        <aside class="comentarios-lista">
            <h2>Opiniones de clientes</h2>

            <div class="comentario">
                <div class="cabComentario">
                    <div class="datosComentador">
                        <img src="{{ asset('images/perfil_default.webp') }}" alt="fotoComentador">
                        <strong>Juan Pérez</strong>
                    </div>
                    <strong>⭐⭐⭐⭐</strong>
                </div>
                <p>Excelente relación calidad-precio. El envío fue muy rápido y el producto llegó en perfectas condiciones. Lo recomiendo totalmente para uso diario.</p>
                <div class="reaccion">
                    <a href="#">👍 <span>12</span></a>
                    <a href="#">👎 <span>2</span></a>
                </div>
            </div>

            <div class="comentario">
                <div class="cabComentario">
                    <div class="datosComentador">
                        <img src="{{ asset('images/perfil_default.webp') }}" alt="fotoComentador">
                        <strong>María García</strong>
                    </div>
                    <strong>⭐⭐⭐⭐⭐</strong>
                </div>
                <p>Simplemente me encanta. Superó mis expectativas, el color es idéntico al de la foto.</p>
                <div class="reaccion">
                    <a href="#">👍 <span>5</span></a>
                    <a href="#">👎 <span>0</span></a>
                </div>
            </div>
        </aside>

        <section class="anadirComentario">
            <h3>Deja tu comentario</h3>
            <form action="#" method="POST" class="form-comentario">
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

                <div class="grupo-input">
                    <label for="mensaje">Comentario:</label>
                    <textarea name="mensaje" id="mensaje" rows="5" placeholder="Cuéntanos tu experiencia con el producto..."></textarea>
                </div>

                <button type="submit" class="btn-enviar">PUBLICAR RESEÑA</button>
            </form>
        </section>
    </div>

@endsection
