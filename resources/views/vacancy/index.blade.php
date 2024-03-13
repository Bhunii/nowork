@extends('layouts.nav.recruiter',['title' => 'Reclutador - Vacantes'])

@section('content')
    <h1>Lista Vacantes</h1>

    <div class="vacancy-list">
        @forelse($vacancies as $vacancy)
            <div class="vacancy-box">
                <span class="company-name">{{$vacancy->company_name}}</span>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th style="background-color: #333; color: #fff;">Perfil</th>
                            <th style="background-color: #333; color: #fff;">Numero vacantes disponibles</th>
                            <th style="background-color: #333; color: #fff;">Dias de trabajo</th>
                            <th style="background-color: #333; color: #fff;">Direccion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$vacancy->occupational_profile}}</td>
                            <td>{{$vacancy->number_vacancy}}</td>
                            <td>{{$vacancy->workday}}</td>
                            <td>{{$vacancy->addres}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bottom-section">
                <a href="{{ route('process.index') }}" id="index" style="background-color: #1d1d1d; color: #fff; padding: 10px; text-decoration: none;">Ver candidatos aplicados</a>
            </div>
        @empty
            <p>No hay sistema</p>
        @endforelse
    </div>

    <div class="bottom-section">
        <!-- Botón al fondo -->
        <a href="{{ route('vacancy.create') }}" id="create" style="background-color: #e44d26; color: #fff; padding: 10px; text-decoration: none;">Crear nueva vacante</a>
    </div>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f2f2f2;
        color: #333;
    }

    .vacancy-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-around;
    }

    .vacancy-box {
        border: 1px solid #ddd;
        padding: 10px;
        width: 300px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .company-name {
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }

    .tabla {
        width: 100%;
        border-collapse: collapse;
    }

    .tabla th, .tabla td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .bottom-section {
        text-align: center;
        margin-top: 20px;
    }
</style>
@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
        }

        /* .tabla_instructores {
            width: 100%;
        }

        .tabla_instructores th,.tabla_instructores td {
            border: 1px solid rgb(159, 159, 159);
            padding: 8px;
            text-align: left;
        } */

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
