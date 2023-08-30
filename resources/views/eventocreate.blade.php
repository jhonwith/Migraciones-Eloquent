<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Evento</h1>
        <form method="POST" action="{{ route('eventos.store') }}">
            @csrf
            <label for="nombre">Nombre del evento:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="numero_ticker">Número de ticker:</label>
            <input type="text" name="numero_ticker" id="numero_ticker" required>
            <br>
            <button type="submit">Guardar Evento</button>
        </form>
        <br>
        <p>{{ session('success') }}</p>
</body>
</html>