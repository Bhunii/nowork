@extends('layouts.nav.recruiter',['title' => 'An Occupation'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show-occupation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/links-occupation.css') }}">
@endsection

@section('content_profile')
<div class="container_index_occupation">
    <div class="content_title_occupation">
        <h3>Ocupacion</h3>
    </div>
    <div class="container_general_occupation">
        <div class="container_content_occupation">
            <div class="container_header_general">
                <ul class="ul_header_general">
                    <li style="width: 15%">Code</li>
                    <li style="width: 25%">Name</li>
                    <li style="width: 60%">Description</li>
                </ul>
            </div>
            <div class="container_data_general">
                <ul class="ul_data_general">
                    <li style="width: 15%">{{$occupation->code_occupation}}</li>
                    <li style="width: 25%">{{$occupation->name}}</li>
                    <li style="width: 60%">{{$occupation->description}}</li>
                </ul>
            </div>
            <div class="links-occupations">
                <div class="card-link">
                    <div class="title_link">
                        <h4>Funciones</h4>
                    </div>
                    <div class="container_links_general">
                        <a href="{{ route('functions.show', $occupation->code_occupation) }}">Ir a funciones</a>
                    </div>
                </div>
                <div class="card-link">
                    <div class="title_link">
                        <h4>Habilidades</h4>
                    </div>
                    <div class="container_links_general">
                        <a href="{{ route('skill.show', $occupation->code_occupation) }}">Ir a habilidades</a>
                    </div>
                </div>
                <div class="card-link">
                    <div class="title_link">
                        <h4>Conocimientos</h4>
                    </div>
                    <div class="container_links_general">
                        <a href="{{ route('knowledge.show', $occupation->code_occupation) }}">Ir a conocimientos</a>
                    </div>
                </div>
                <div class="card-link">
                    <div class="title_link">
                        <h4>Denominaciones</h4>
                    </div>
                    <div class="container_links_general">
                        <a href="{{ route('denomination.show', $occupation->code_occupation) }}">Ir a denominaciones</a>
                    </div>
                </div>
                <div class="card-link">
                    <div class="title_link">
                        <h4>Ocupaciones Relacionadas</h4>
                    </div>
                    <div class="container_links_general">
                        <a href="{{ route('relation.show', $occupation->code_occupation) }}">Ir a relacionadas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a href="{{route('occupation.index')}}" id="create">Volver</a>
    </div>
</div>

@endsection
