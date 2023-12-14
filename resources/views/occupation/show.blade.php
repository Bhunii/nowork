@extends('layouts.nav.recruiter', ['title'=>'Ocupaciones'])

@section('css')
 <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content_profile')

<h1>LISTA DE OCUPACIONES</h1>
<table class="tabla">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre de ocupacion</th>
            <th>Descripcion</th>
            <th>Descripcion Funcion</th>
            <th>Descripcion Denominacion</th>
            <th>Codigo Relacionada</th>
            <th>Nombre Habilidad</th>
            <th>Nombre Conocimiento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $occupation->code_occupation }}</td>
            <td>{{ $occupation->name }}</td>
            <td>{{ $occupation->description }}</td>

            <td>
                {{$occupation->function->description}}
            </td>
            <td>
                {{$occupation->denomination->description}}
            </td>
            <td>
                {{$occupation->relation->code_occupation_relation}}
            </td>
            <td>
                {{$occupation->skill->name}}
            </td>

            <td>
                {{$occupation->knowledge->name}}
            </td>

        </tr>
    </tbody>
</table>
@endsection