@extends('layouts.app')

@section('content')
<a href="{{ route('occupation.index') }}">Back</a>
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
            </td>

        </tr>
    </tbody>
</table>
@endsection
