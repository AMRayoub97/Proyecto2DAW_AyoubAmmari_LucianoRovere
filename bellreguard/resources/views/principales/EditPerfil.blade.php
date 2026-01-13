@extends('plantilla')

@section('titulo', 'Editar perfil')

@section('contenido')

    @vite(['resources/sass/principales/editarPerfil.scss'])

    <section id="perfilContainer">
    <form action="{{ route('perfil.update', auth()->user()->id) }}" method="POST" class="perfilForm">
        @csrf
        @method('PUT')

        <h2>Editar Perfil</h2>

        <div class="campo">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', auth()->user()->nombre) }}">
            @error('nombre') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="campo">
            <label>Apellidos</label>
            <input type="text" name="apellidos" value="{{ old('apellidos', auth()->user()->apellidos) }}">
            @error('apellidos') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="campo">
            <label>Correo electrónico</label>
            <input type="email" name="correo" value="{{ old('correo', auth()->user()->correo) }}">
            @error('correo') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="campo">
            <label>Nueva contraseña</label>
            <input type="password" name="contrasena">
            @error('contrasena') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="campo">
            <label>Confirmar contraseña</label>
            <input type="password" name="contrasena_confirmation">
        </div>

        <div class="campo">
            <label>Nacionalidad</label>
            <input type="text" name="nacionalidad" value="{{ old('nacionalidad', auth()->user()->nacionalidad) }}">
        </div>

        <div class="campo">
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento"
                   value="{{ old('fecha_nacimiento', auth()->user()->fecha_nacimiento) }}">
        </div>

        <div class="campo">
            <label>Teléfono</label>
            <input type="text" name="telefono" value="{{ old('telefono', auth()->user()->telefono) }}">
        </div>

        <div class="campo">
            <label>Género</label>
            <select name="genero">
                <option value="">Seleccionar</option>
                <option value="masculino" {{ auth()->user()->genero == 'masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="femenino" {{ auth()->user()->genero == 'femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="otro" {{ auth()->user()->genero == 'otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <button type="submit" class="btnGuardar">Guardar cambios</button>
    </form>
</section>


@endsection
