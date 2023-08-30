<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <h1>Eliminar Evento</h1>
    <p>¿Estás seguro de que deseas eliminar este evento?</p>
    <a href="{{ route('eventos.delete', $evento) }}"
       onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
        Eliminar
    </a>

    <form id="delete-form" action="{{ route('eventos.delete', $evento) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

</body>
</html>