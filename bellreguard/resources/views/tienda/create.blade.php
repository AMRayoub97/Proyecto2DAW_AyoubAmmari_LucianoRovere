@extends('plantilla')

@section('titulo', 'Añadir jugador')

@section('contenido')
    @vite(['resources/sass/jugadores/create.scss'])

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenedor-form">
        <h1>Añadir nuevo Producto</h1>

        <form action="{{ route('tienda.store') }}" method="POST" enctype="multipart/form-data" class="form-jugador">
            @csrf

            {{-- Nombre --}}
            <div class="grupo">
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" required>
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Foto --}}
            <div class="grupo">
                <label>Foto</label>
                <input type="file" name="foto" accept="image/*">
                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- contendio --}}
            <div class="grupo">
                <label>Contenido</label>
                <input type="text" name="contendio" value="{{ old('contendio') }}">
                @error('contendio')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- precio --}}
            <div class="grupo">
                <label>precio ($)</label>
                <input type="text" name="precio" value="{{ old('precio') }}">
                @error('precio')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Género --}}
            <div class="grupo">
                <label>Género</label>
                <select name="genero">
                    <option value="M" {{ old('genero') == 'M' ? 'selected' : '' }}>M</option>
                    <option value="F" {{ old('genero') == 'F' ? 'selected' : '' }}>F</option>
                    <option value="F" {{ old('genero') == 'N' ? 'selected' : '' }}>N</option>
                </select>
                @error('genero')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Talla --}}
            <div class="grupo">
                <label for="talla">Talla:</label>
                <select name="talla" >
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXXL">XXXL</option>
                </select>
            </div>

            {{-- cantidad --}}
            <div class="grupo">
                <label>cantidad</label>
                <input type="number" name="cantidad" value="{{ old('cantidad') }}" min="1" >
                @error('cantidad')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>



            <button type="submit" class="btn-guardar">Guardar jugador</button>
        </form>
    </div>
@endsection
