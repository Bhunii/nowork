@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
    
        div {
            background-color: rgb(121, 121, 121);
            width: 80%;
            margin: 50px auto;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        #create {
            display: block;
            margin-bottom: 20px;
            color: #d32f2f;
            text-decoration: none;
        }
    
        h1 {
            color: #333;
            text-align: center;
        }
    
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
    
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    
        th {
            background-color: #d32f2f;
            color: white;
        }
    
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    
        .edit {
            color: #d32f2f;
            text-decoration: none;
            margin-right: 5px;
        }
    
        .edit:hover {
            text-decoration: underline;
        }
    
        .delete-btn {
            background-color: #d32f2f;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    
        .delete-btn:hover {
            background-color: #b71c1c;
        }
    </style>
    
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
                    <td>{{$occupation->name}}</td>
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