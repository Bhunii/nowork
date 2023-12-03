@extends('layouts.app',['title' => 'Registered Users'])
@section('content')
<main class="contenido">
    <h3>List of Users</h3>
    <style>
    .tabla td{
        border: 1px rgb(159, 159, 159) solid;
    }
    </style>
    <table class="tabla">
        <tr>
            <td>Config</td>
            <td>User id</td>
            <td>Name</td>
            <td>Last name</td>
            <td>Email</td>
            <td>Role id</td>
            <td>Role name</td>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td style="width: 360px"><a href="{{ route('user.edit', $user->id)}}">Edit User Role</a> |
                    <form method="POST" action="{{route('user.destroy', $user->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="edit"/>
                    </form> |
                    <a href="{{ route('user.show', $user->id) }}">Show User</a> |
                    <a href="{{ route('user.edit_data', $user->id) }}">Update Data</a>
                </td>
                <td style="width: 60px">{{ $user->id }}</td>
                <td style="width: 200px">{{ $user->name }}</td>
                <td style="width: 200px">{{ $user->last_name }}</td>
                <td style="width: 300px">{{ $user->email }}</td>
                <td style="width: 60px">{{ $user->role_id }}</td>
                <td style="width: 150px">{{ $user->role->role_name }}</td>
                <td style="width: 150px, border: none">
                @switch($user->role->role_name)
                    @case("INSTRUCTOR")
                        <a href="{{ route('instructor.create', $user->id) }}">Create Profile</a>
                        @break
                    @case("RECLUTADOR")
                        <a href="{{ route('recruiter.create', $user->id) }}">Create Profile</a>
                        @break
                    @case("CANDIDATO")
                        <a href="{{ route('candidate.create', $user->id) }}">Create Profile</a>
                        @break
                    @default
                        hola
                @endswitch</td>
            </tr>
        @empty
            <tr>
                <td>Table empty</td>
            </tr>
        @endforelse
    </table>
    <br>
    <h4><a href="{{ route('user.create') }}">Registrar un Usuario</a></h4>
</main>
@endsection
