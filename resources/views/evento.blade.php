<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>envento</h1>
        @foreach ($evento as $n )
            <p><b>id</b>{{ $n['id'] }}</p>
            <p><b>nombre</b>{{ $n['nombre'] }}</p>
            <p><b>ticket</b>{{$n['numero_ticker'] }}</p>
        @endforeach
    </div>
</body>
</html>