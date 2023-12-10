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
                    <th>Nombre Funcion</th>
                    <th>Descripcion Denominacion</th>
                    <th>Codigo Relacionada</th>
                    <th>Nombre Habilidad</th>
                    <th>Nombre Conocimiento</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$occupation->code_occupation}}</td>
                    <td>{{$occupation->name_occupation}}</td>
                    <td>{{$occupation->description_occupation}}</td>
                    <td>{{$occupation->function->name_function}}</td>
                    <td>{{$occupation->denomination->description_denomination}}</td>
                    <td>{{$occupation->relation->code_occupation_relation}}</td>
                    <td>{{$occupation->skill->name_skill}}</td>
                    <td>{{$occupation->knowledge->name_knowledge}}</td>
                </tr></tbody>
        </table>
@endsection