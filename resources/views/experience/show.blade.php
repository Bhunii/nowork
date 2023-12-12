@extends('layouts.nav.administrator',['title' => 'Curriculum - Experiencia'])

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-show.css') }}">
@endsection

@section('content_profile')
<section class="contenedor_show_general">
    <article>
        <h3>Datos de la experiencia</h3>
    </article>
    <article class="contenedor_data_general">
        <div class="contenido_data_general">
            <ul class="ul_campo_data">
                <li>Nombre empresa</li>
                <li>Direccion</li>
                <li>Denominacion</li>
                <li>Funciones</li>
                <li>Fecha inicio</li>
                <li>Fecha fin</li>
            </ul>
            <ul class="ul_valor_data">
                <li>{{$experience->name_company}}</li>
                <li>{{$experience->addres}}</li>
                <li>{{$experience->denomination->description}}</li>
                <li>{{$experience->function->description}}</li>
                <li>{{$experience->start_date}}</li>
                <li>{{$experience->end_date}}</li>
            </ul>
        </div>
    </article>
    <article>
        <a href="{{route('experience.index')}}">Volver</a>
    </article>
</section>
@endsection
