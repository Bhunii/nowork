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
                <li style="width: 33%"><span>Empresa</span></li>
                <li style="width: 17%"><span>Ubicacion</span></li>
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
                            <li style="width: 33%"><span>{{ $process->vacancy->company->name }}</span></li>
                            <li style="width: 17%">
                                <span>{{ $process->vacancy->departament->name}}</span>
                                <span>{{ $process->vacancy->municipality->name}}</span>
                            </li>
                            <li style="width: 25%"><span>{{ $process->vacancy->charge->denomination->description }}</span></li>
                            <li style="width: 15%"><span>{{ $process->selection_status->name }}</span></li>
                            <li style="width: 10%;border-right: none;"><span>{{ $process->date_applied }}</span></li>
                        </ul>                        
                    </div>
                @endforeach
            @endif
        </div>
    </article>
</section>
@endsection
