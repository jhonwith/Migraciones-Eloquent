@extends('layouts.app') <!-- Si estás utilizando una plantilla maestra -->

@section('content')
    <h1>Datos desde la Base de Datos</h1>
    <ul>
        @foreach ($datos as $dato)
            <li>{{ $dato->campo1 }} - {{ $dato->campo2 }}</li>
        @endforeach
    </ul>
@endsection
