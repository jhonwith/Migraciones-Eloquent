
    <h1>Editar Evento</h1>
    <form action="{{ route('eventos.update', $evento) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $evento->nombre }}">
        </div>

        <div>
            <label for="numero_ticker">numero_ticker:</label>
            <input type="number" name="numero_ticker" value="{{ $evento->numero_ticker }}">
        </div>

        <!-- Agrega más campos del formulario según tus necesidades -->

        <button type="submit">Guardar cambios</button>
    </form>

