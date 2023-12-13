@extends('layouts.nav.administrator',['title' => 'Instructores'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
        }

        .tabla_instructores {
            width: 100%;
        }

        .tabla_instructores th,.tabla_instructores td {
            border: 1px solid rgb(159, 159, 159);
            padding: 8px;
            text-align: left;
        }

        .tabla_instructores th {
            background-color: #f2f2f2;
        }

        .tabla_instructores a {
            color: blue;
        }
    </style>
@endsection

@section('content_profile')
    <section class="contenedor_index_general">
        <article class="titulo_index_general">
            <h3>Listado de Instructores</h3>
        </article>
        <article class="contenedor_tabla_general">
            <table class="contenido_tabla_general">
                <tr class="tr_tabla_general_encabezado">
                    <th style="width: 200px">Config</th>
                    <th style="width: 200px">Doc Num</th>
                    <th style="width: 200px">Name</th>
                    <th style="width: 200px">Last Name</th>
                    <th style="width: 200px">Email</th>
                    <th style="width: 200px">Role name</th>
                </tr>
                @forelse ($instructors as $instructor)
                    <tr class="tr_tabla_general_contenido">
                        <td class="td_general_tabla_general td_configuracion_general">
                            <a class="a_config_general" href="#">Show Instructor</a>
                        </td>
                        <td class="td_general_tabla_general">{{ $instructor->user->doc_num }}</td>
                        <td class="td_general_tabla_general">{{ $instructor->user->name }}</td>
                        <td class="td_general_tabla_general">{{ $instructor->user->last_name }}</td>
                        <td class="td_general_tabla_general">{{ $instructor->user->email }}</td>
                        <td class="td_general_tabla_general">{{ $instructor->user->role->role_name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Table empty</td>
                    </tr>
                @endforelse
            </table>
        </article>
    </section>
@endsection
