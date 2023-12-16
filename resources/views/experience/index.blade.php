@extends('layouts.nav.candidate',['title' => 'Estudios'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
        }
    </style>
@endsection

@section('content_profile')
<section class="contenedor_index_general">
    <article class="titulo_index_general">
        <h3>Listado de Experiencias</h3>
    </article>
    <article class="contenedor_tabla_general">
        <table class="contenido_tabla_general">
            <tr class="tr_tabla_general_encabezado">
                <td style="width: 200px">Config</td>
                <td style="width: 300px">Nombre Empresa</td>
                <td style="width: 205px">Start Date</td>
                <td style="width: 155px">End Date</td>
            </tr>
            @forelse ($experiences as $experience)
                <tr class="tr_tabla_general_contenido">
                    <td class=" td_general_tabla_general td_configuracion_general">
                        <a class="a_config_general" href="{{route('experience.show', $experience->id)}}">Show experience</a> |
                        <a class="a_config_general" href="{{route('experience.edit', $experience->id)}}">Edit experience</a>
                    </td>
                    <td class="td_general_tabla_general">{{ $experience->name_company }}</td>
                    <td class="td_general_tabla_general">{{ $experience->start_date }}</td>
                    <td class="td_general_tabla_general">{{ $experience->end_date }}</td>
                    <td class="td_borrar_general" style="width: 70px">
                        <form method="POST" action="{{route('experience.destroy', $experience->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="edit"/>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Table empty</td>
                </tr>
            @endforelse
        </table>
        <div>
            <a href="{{ route('experience.create') }}">Agregar</a>
        </div>
    </article>
</section>
@endsection
