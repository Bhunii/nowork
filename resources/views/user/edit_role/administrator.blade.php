@extends('layouts.nav.administrator',['title' => 'Editar Rol Usuario'])

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-edit-role.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
                font-size: 15px;
            }
    </style>
@endsection

@section('content_profile')
<section class="contenedor_edit_role_usuario">
    <article class="contenedor_tabla_edit_role">
        <table class="tabla_editar_rol">
            <tr class="tr_edit_role_encabezado">
                <td>Name</td>
                <td>Last name</td>
                <td>Doc Num</td>
                <td>Email</td>
                <td>Role update</tdx>
            </tr>
            <tr class="tr_data_edit_role">
                <td style="width: 200px">{{ $user->name }}</td>
                <td style="width: 200px">{{ $user->last_name }}</td>
                <td style="width: 200px">{{ $user->doc_num }}</td>
                <td style="width: 290px">{{ $user->email }}</td>
                <td style="width: 300px">
                    <form class="form_edit_user_role" method="post" action="{{route('user.update_role',$user->id)}}">
                        @csrf
                        @method('PUT')
                        <select name="role_id">
                            <option value="">select an option</option>
                            <option value="2">Instructor</option>
                        </select>
                        <td><input type="submit" value="Update Role"></td>
                    </form>
                </td>
            </tr>
        </table>
    </article>
</section>

@endsection
