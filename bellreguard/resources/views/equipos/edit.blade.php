



<div class="window">
    @if(session('success'))
        <script>
            // سدّ الwindow (modal) من داخل iframe
            window.parent.postMessage('closeEditModal', '*');
        </script>
    @endif
    <div class="window-header">
        <span>Editar equipo – {{ $equipo->nombre }}</span>
        <button type="button" onclick="window.parent.postMessage('closeEditModal', '*')">✖</button>
    </div>

    <div class="window-body">
        <form action="{{ route('equipos.update' , $equipo->id) }}" method="POST" enctype="multipart/form-data" class="form-jugador">
            @csrf
            @method('PUT')

            <div class="grupo">
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ $equipo->nombre }}" required>
            </div>

            <div class="grupo">
                <label>Foto</label>
                <input type="file" name="foto">
            </div>

            <div class="grupo">
                <label>Categoría</label>
                <input type="text" name="categoria" value="{{ $equipo->categoria }}">
            </div>

            <div class="grupo">
                <label>Género</label>
                <select name="genero">
                    <option value="M" {{ $equipo->genero == 'M' ? 'selected' : '' }}>M</option>
                    <option value="F" {{ $equipo->genero == 'F' ? 'selected' : '' }}>F</option>
                </select>
            </div>

            <div class="grupo">
                <label>Entrenador</label>
                <input type="text" name="entrenador" value="{{ $equipo->entrenador }}">
            </div>

            <button type="submit" class="btn-guardar">Guardar</button>
        </form>
    </div>
</div>
