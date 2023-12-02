@extends('layouts.app',['title' => 'Roles'])

@section('content')
<main class="contenido">
    <h3>Table of Roles</h3>
    <style>
    .tabla_roles td{
        border: 1px rgb(159, 159, 159) solid;
    }
    </style>
    <table class="tabla_roles">
        <tr>
            <td style="width: 50px">id</td>
            <td style="width: 150px">Name</td>
            <td style="width: 400px">Description</td>
        </tr>
        @forelse ($roles as $role)
            <tr>
                <td style="width: 50px">{{ $role->id }}</td>
                <td style="width: 150px">{{ $role->role_name }}</td>
                <td style="width: 400px">{{ $role->description }}</td>
            </tr>
        @empty
            <tr>
                <td>Table empty</td>
            </tr>
        @endforelse
    </table>
    <br>
    <h4><a href="{{ route('role.create') }}">Registrar un Rol</a></h4>
</main>

@endsection
