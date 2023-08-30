<!DOCTYPE html>
<html>
<head>
    <title>Agregar Evento</title>
</head>
<body>

    <h1>Lista de Eventos</h1>

    <a href="{{ route('eventos.create') }}">Crear Nuevo Evento</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>ticker</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $evento->id }}</td>
                    <td>{{ $evento->nombre }}</td>
                    <td>{{ $evento->numero_ticker }}</td>
                    
                    <td>
                        <a href="{{ route('eventos.edit', $evento) }}">Editar</a>
                        <a href="{{ route('eventos.destroy', $evento) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>





</body>
</html>
