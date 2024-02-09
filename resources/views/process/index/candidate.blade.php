@extends('layouts.nav.candidate',['title' => 'Candidate - Aplicaciones'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/process.css') }}">
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
        <h3>Listado de Vacante Aplicadas</h3>
    </article>
    <article class="contenedor_vacantes_general">
        <div class="contenedor_vacantes_encabezado">
            <ul class="ul_vacantes ul_vacantes_encabezado">
                <li style="width: 35%"><span>Empresa</span></li>
                <li style="width: 15%"><span>Ubicacion</span></li>
                <li style="width: 25%"><span>Cargo</span></li>
                <li style="width: 15%"><span>Estado</span></li>
                <li style="width: 10%;border-right: none;"><span>Fecha Postulacion</span></li>
            </ul>                        
        </div>
        <div class="contenedor_vacantes_candidato">
            @if ($processes->isEmpty())
                <span>table empty</span>
            @else
                @foreach($processes as $process)                   
                    <div class="contenido_vacantes_candidato">
                        <ul class="ul_vacantes ul_vacantes_candidato">
                            <li style="width: 35%"><span>empresa</span></li>
                            <li style="width: 15%"><span>ubicacion</span></li>
                            <li style="width: 25%"><span>cargo</span></li>
                            <li style="width: 15%"><span>fecha postulacion</span></li>
                            <li style="width: 10%;border-right: none;"><span>estado</span></li>
                        </ul>                        
                    </div>
                @endforeach
            @endif
        </div>
    </article>
</section>
@endsection
