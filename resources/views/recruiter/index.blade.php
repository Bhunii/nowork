@extends('layouts.nav.instructor',['title' => 'Reclutadores'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile {
            font-size: 15px;
        }

        .tabla_reclutadores {
            border-collapse: collapse;
            width: 100%;
        }

        .tabla_reclutadores th, .tabla_reclutadores td {
            border: 1px solid rgb(159, 159, 159);
            padding: 8px;
            text-align: left;
        }

        .tabla_reclutadores th {
            background-color: #f2f2f2;
        }

        .tabla_reclutadores a {
            color: blue;
        }
    </style>
@endsection

@section('content_profile')
    <section class="contenedor_index_general">
        <article class="titulo_index_general">
            <h3>Listado de Reclutadores</h3>
        </article>
        <article class="contenedor_tabla_general">
            <table class="contenido_tabla_general">
                <tr class="tr_tabla_general_encabezado">
                    <th style="width: 130px">Config</th>
                    <th style="width: 120px">Doc num</th>
                    <th style="width: 200px">Name</th>
                    <th style="width: 200px">Last name</th>
                    <th style="width: 100px">Role name</th>
                    <th style="width: 115px">Admission date</th>
                </tr>
                @forelse ($recruiters as $recruiter)
                    <tr class="tr_tabla_general_contenido">
                        <td class="td_general_tabla_general td_configuracion_general">
                            <a class="a_config_general" href="#">Show Recruiter</a>
                        </td>
                        <td class="td_general_tabla_general">{{ $recruiter->user->doc_num }}</td>
                        <td class="td_general_tabla_general">{{ $recruiter->user->name }}</td>
                        <td class="td_general_tabla_general">{{ $recruiter->user->last_name }}</td>
                        <td class="td_general_tabla_general">{{ $recruiter->user->role->role_name }}</td>
                        <td class="td_general_tabla_general">{{ $recruiter->admission_date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Tabla vacía</td>
                    </tr>
                @endforelse
            </table>
        </article>
    </section>
@endsection
