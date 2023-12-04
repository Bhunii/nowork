@extends('layouts.app')

@section('content')

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
        <a href="{{route('occupation.create')}}" id="create">Crear nueva ocupacion</a>

        <h1>LISTA DE OCUPACIONES</h1>
        <table class="tabla">
            
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            @forelse($occupations as $occupation)
            <tbody>
                <tr>
                    <td><a href="#">{{$occupation->name}}</a></td>
                    <td><a href="{{route('occupation.show', $occupation->id)}}" class="edit">DETALLES</a>|<a href="{{ route('occupation.edit', $occupation->id)}}" class="edit">EDIT</a>|
                        <form method="POST" action="{{route('occupation.destroy', $occupation->id)}}" >
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="edit"/>
                            </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No hay ocupaciones aun...</td>
                </tr></tbody>
            @endforelse
        </table>
    </div>
</body>
</html>
@endsection