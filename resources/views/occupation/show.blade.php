@extends('layouts.app')

@section('content')
<a href="{{route('occupation.index')}}">Back</a>
<h1>LISTA DE OCUPACIONES</h1>
        <table class="tabla">
            
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre de ocupacion</th>
                    <th>Descripcion</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$occupation->code_occupation}}</td>
                    <td>{{$occupation->name}}</td>
                    <td>{{$occupation->description}}</td>
                </tr></tbody>
        </table>
@endsection