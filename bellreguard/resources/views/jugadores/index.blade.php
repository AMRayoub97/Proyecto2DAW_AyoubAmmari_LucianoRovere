@extends('plantilla')

@section('titulo', 'Jugadores')

@section('contenido')

    @vite(['resources/sass/principales/jugadores.scss', 'resources/js/principales/jugadores.js'])
        <section>
            <div class="cab">
                <h2>JUGADORES</h2>
                <!-- MUESTRA SOLO AL ADMINISTRADORES Y ENTRENADORES-->
                @auth
                 @if(auth()->user()?->role == 'admin')
                    <a href="{{ route('jugadores.create') }}">AÑADIR</a>
                 @endif
                @endauth
            </div>
            <hr>
            <!-- mensajes -->
             @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            <div class="tarjetas">

                @foreach($jugadores as $jugador)
                    <div class="tarjeta">
                        <div class="lista">
                            @auth
                                @if(auth()->user()?->role == 'admin')
                                <img src="{{ asset('images/lista.png') }}" alt="lista" class="listaEditar">
                                <ul class="listaUl">
                                    <li><a href="{{ route('jugadores.edit', $jugador->id) }}">Editar</a></li>
                                    <hr>
                                    <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <li><button name="borrar" >Borrar</button></li>
                                    </form>
                                </ul>
                                @endif
                            @endauth


                        </div>
                    <div class="contenido" style="background-image: url('{{ asset('images/jugadores/' . $jugador->foto) }}')">
                        <table>
                            <tr>
                                <th colspan="2">{{ $jugador->nombre }}</th>
                            </tr>
                            <tr>
                                <th>Altura</th>
                                <th>{{ $jugador->altura }} m</th>
                            </tr>
                            <tr>
                                <th>Peso</th>
                                <th>{{ $jugador->peso }} kg</th>
                            </tr>
                            <tr>
                                <th>Edad</th>
                                <th>{{ $jugador->edad }} años</th>
                            </tr>
                            <tr>
                                <th>Experiencia</th>
                                <th>{{ $jugador->experiencia }} años</th>
                            </tr>
                            <tr>
                                <th>Nacionalidad</th>
                                <th>{{ $jugador->nacionalidad }}</th>
                            </tr>
                        </table>
                        <strong>{{ $jugador->puntuacion }}</strong>
                    </div>

                    <div class="btnsJugador">
                        <a href="{{ route('jugadores.show', $jugador->id) }}" >Ver Perfil</a>
                        <a href="#">⭐</a>
                    </div>
                </div>
                @endforeach

                <div class="d-flex justify-content-center mt-4" id="paginas">
                    {{ $jugadores->links('pagination::bootstrap-5') }}
                </div>


            </div>
        </section>


@endsection
