@extends('layouts.app',['title' => 'Update User Role'])

@section('content')
<main class="contenido">
    <style>
        .form_user_edit_role{
        position: relative;
        }
    </style>
    <form class="form_edit_user_role" method="post" action="{{route('user.update',$user->id)}}">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>User id</td>
                <td>Name</td>
                <td>Last name</td>
                <td>Email</td>
                <td>Role update</tdx>
            </tr>
            <tr>
                <td style="width: 70px">{{ $user->id }}</td>
                <td style="width: 200px">{{ $user->name }}</td>
                <td style="width: 200px">{{ $user->last_name }}</td>
                <td style="width: 300px">{{ $user->email }}</td>
                <td style="width: 150px">
                    <select name="role_id">
                        <option value="4">Candidato</option>
                        <option value="3">Reclutador</option>
                        <option value="2">Instructor</option>
                    </select>
                </td>
                <td><input type="submit" value="Update Role"></td>
            </tr>
        </table>
    </form>
</main>

@endsection
