@extends('layouts.nav.recruiter',['title' => 'Reclutador - Vacantes'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
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
            <h3>Listado de Vacantes</h3>
        </article>
        <article class="contenedor_tabla_general">
            <table class="contenido_tabla_general">
                <tr class="tr_tabla_general_encabezado">
                    <th style="width: 200px">Config</th>
                    <th style="width: 200px">Denomination</th>
                    <th style="width: 200px">Number vacancy</th>
                    <th style="width: 200px">Municipio</th>
                    <th style="width: 200px">Start date</th>
                    <th style="width: 200px">End date</th>
                </tr>
                @forelse ($vacancies as $vacancy)
                    <tr class="tr_tabla_general_contenido">
                        <td class="td_general_tabla_general td_configuracion_general">
                            <a class="a_config_general" href="#">Show vacancy</a>
                        </td>
                        <td class="td_general_tabla_general">{{ $vacancy->id }}</td>
                        <td class="td_borrar_general" style="width: 70px">
                        <form method="POST" action="{{route('vacancy.destroy', $vacancy->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="edit"/>
                        </form>
                        <div class="bottom-section">
                            <a href="{{ route('process.index', $vacancy->id) }}" id="index">Ver candidatos aplicados</a>
                        </div>
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay vacantes</td>
                    </tr>
                @endforelse
            </table>
        </article>
        <article>
            <a href="{{ route('vacancy.create') }}">Agregar</a>
        </article>
    </section>
@endsection
