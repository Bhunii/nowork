@extends('layouts.nav.candidate',['title' => 'Estudio'])

@section('js')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-show.css') }}">
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
                <li>{{$study->name}}</li>
                <li>{{$study->id_denomination}}</li>
                <li>{{$study->id_departament}}</li>
                <li>{{$study->id_municipality}}</li>
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
