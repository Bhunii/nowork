@extends('layouts.nav.administrator',['title' => 'Usuarios'])

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-index.css') }}">
@endsection

@section('style')

@endsection

@section('content_profile')
<section class="contenedor_index_usuarios">
    <article class="titulo_index_usuarios">
        <h3>Listado de Usuarios</h3>
    </article>
    <article class="contenedor_tabla_usuarios">
        <table class="contenido_tabla_usuarios">
            <tr class="tr_tabla_usuario_encabezado">
                <td>Config</td>
                <td>Doc Num</td>
                <td>Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Role Name</td>
            </tr>
            @forelse ($users as $user)
                <tr class="tr_tabla_usuario_contenido">
                    <td class=" td_general_tabla_usuarios td_configuracion_usuario" style="width: 200px">
                        <a class="a_config_usuario" href="{{ route('user.edit_role', $user->id)}}">Edit User Role</a> |
                        <a class="a_config_usuario" href="{{ route('user.show', $user->id) }}">Show User</a>
                    </td>
                    <td class="td_general_tabla_usuarios" style="width: 100px">{{ $user->doc_num }}</td>
                    <td class="td_general_tabla_usuarios" style="width: 200px">{{ $user->name }}</td>
                    <td class="td_general_tabla_usuarios" style="width: 200px">{{ $user->last_name }}</td>
                    <td class="td_general_tabla_usuarios" style="width: 200px">{{ $user->email }}</td>
                    <td class="td_general_tabla_usuarios" style="width: 150px">{{ $user->role->role_name }}</td>
                    <!-- <td class="td_borrar_usuario" style="width: 70px">
                        <form method="POST" action="{{route('user.destroy', $user->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="edit"/>
                        </form>
                    </td> -->
                </tr>
            @empty
                <tr>
                    <td>Table empty</td>
                </tr>
            @endforelse
        </table>
    </article>
</section>
@endsection
