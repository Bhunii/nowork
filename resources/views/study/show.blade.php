@extends('layouts.nav.candidate',['title' => 'Curriculum - Estudio'])

@section('js')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-show.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 13.5px;
        }
    </style>
@endsection

@section('content_profile')
<section class="contenedor_show_general">
    <article>
        <h3>Datos del usuario</h3>
    </article>
    <article class="contenedor_data_general">
        <div class="contenido_data_general">
            <ul class="ul_campo_data">
                <li>Nombre Institucion</li>
                <li>Denominacion</li>
                <li>Departamento</li>
                <li>Municipio</li>
                <li>Direccion</li>
                <li>Fecha Culminacion</li>
            </ul>
            <ul class="ul_valor_data">
                <li>{{$study->name_institution}}</li>
                <li>{{$study->denomination->description}}</li>
                <li>{{$study->departament->name}}</li>
                <li>{{$study->municipality->name}}</li>
                <li>{{$study->addres}}</li>
                <li>{{$study->end_date}}</li>
            </ul>
        </div>
    </article>
    <article>
        <a href="{{route('study.index')}}">Back</a>
    </article>
</section>
@endsection
