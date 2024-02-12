@extends('layouts.nav.recruiter', ['title'=>'Ocupaciones'])

@section('css')
 <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content_profile')

<<<<<<< HEAD
@section('content')
<a href="{{ route('occupation.index') }}">Back</a>
<h1>LISTA DE OCUPACIONES</h1>
<table class="tabla">

=======
<h1>LISTA DE OCUPACIONES</h1>
<table class="tabla">
>>>>>>> origin/main
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
<<<<<<< HEAD
                @foreach($occupation->functions as $function)
                    {{ $function->description_function }}<br>
                @endforeach
            </td>
            <td>
                @foreach($occupation->denominations as $denomination)
                    {{ $denomination->description_denomination }}<br>
                @endforeach
            </td>

            <td>
                @foreach($occupation->relations as $relation)
                    {{ $relation->code_occupation_relation }}<br>
                @endforeach
            </td>

            <td>
                @foreach($occupation->skills as $skill)
                    {{ $skill->name_skill }}<br>
                @endforeach
            </td>

            <td>
                @foreach($occupation->knowledge as $knowledge)
                    {{ $knowledge->name_knowledge }}<br>
                @endforeach
=======
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
>>>>>>> origin/main
            </td>

        </tr>
    </tbody>
</table>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> origin/main
