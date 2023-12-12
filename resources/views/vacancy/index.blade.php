@extends('layouts.app')

@section('content')
<a href="{{ route('vacancy.create') }}" id="create">Create new vacancy</a>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
    }
    form {
    max-width: 600px;
    margin: 0 auto;
    }
    label {
    display: block;
    margin-bottom: 8px;
    }
    input, select {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    }
    button {
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    cursor: pointer;
    }
</style>
    <h1>Lista Vacantes</h1>
    <table class="tabla">
        <thead>
            <tr>
                <th>Perfil</th>
                <th>Numero vacantes disponibles</th>
                <th>Dias de trabajo</th>
                <th>Direccion</th>
            </tr>
        </thead>
        @forelse($vacancies as $vacancy)
        <tbody>
            <tr>
                <td>{{$vacancy->occupational_profile}}</td>
                <td>{{$vacancy->number_vacancy}}</td>
                <td>{{$vacancy->workday}}</td>
                <td>{{$vacancy->addres}}</td>
            </tr>
        </tbody>

    </table>
    @empty
        <p>No hay sistema</p>
    @endforelse
</ul>
@endsection