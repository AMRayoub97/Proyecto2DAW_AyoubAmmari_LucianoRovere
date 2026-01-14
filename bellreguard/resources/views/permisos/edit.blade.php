@extends('plantilla')

@section('titulo', 'editar permiso')

@section('contenido')
    @vite(['resources/sass/permisos/edit.scss'])

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="contenedor-form">
        <h1>Editar el role del usuario: <strong>{{ $usuario->nombre }}</strong></h1>

        <form action="{{ route('permisos.update',$usuario->id) }}" method="POST" enctype="multipart/form-data" class="form-usuario">
            @method('PUT')
            @csrf

            {{-- Nombre --}}
            <div class="grupo">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ $usuario->nombre }}" disabled>
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- role --}}
            <div class="grupo">
                <label>Role</label>
                <select name="role">
                    <option value="admin" {{ $usuario->role == 'admin' ? 'selected' : '' }}>admin</option>
                    <option value="entrenador" {{ $usuario->role == 'entrenador' ? 'selected' : '' }}>entrenador</option>
                    <option value="otro" {{ $usuario->role == 'otro' ? 'selected' : '' }}>otro</option>

                </select>
                @error('role')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="btns">
                <a href="{{ route('permisos.index') }}" class="btn-guardar" > volver   </a>
                <button type="submit" class="btn-guardar">Guardar cambios   </button>
            </div>
        </form>
    </div>
@endsection
