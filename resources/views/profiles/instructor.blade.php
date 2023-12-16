@extends('layouts.nav.instructor',['title' => 'Your Profile'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content_profile')
    <div class="profile">
        <article class="img_profile">
            @switch($user->genre)
                @case("M")
                    <img class="icon_profile2" src="{{asset('img/gigachad.jpg')}}" alt="icon profile">
                    @break
                @case("F")
                    <img class="icon_profile2" src="{{ asset('img/icon_profile2.png') }}" alt="icon profile">
                    @break
                @default
                                <!-- <img src="icon_profile_woman.png" alt="icon profile"> -->
            @endswitch
        </article>
        <article class="data_profile">
            <ul class="data_ul">
                <li class="data data_title">
                    <h2>Informacion del Perfil</h2>
                </li>
            </ul>
            <div class="contenedor_ul_data">
                <ul class="ul_campo_data">
                    <li><span> Instructor </span></li>
                    <li><span> Documento </span></li>
                    <li><span> Ubicacion </span></li>
                    <li><span> Correo </span></li>
                    <li><span> Telefono </span></li>
                    <li><span> Profesion </span></li>
                    <li><span> Specialidad </span></li>
                </ul>
                <ul class="data_ul">
                    <li class="data">
                        <span>{{ auth()->user()->name }}</span> <span>{{ auth()->user()->last_name }}</span>
                    </li>
                    <li class="data">
                        <span>{{ auth()->user()->doc_type }}</span> <span>{{ auth()->user()->doc_num }}</span>
                    </li>
                    <li class="data">
                        <span>{{ auth()->user()->candidate->departament->name }}</span> - <span>{{auth()->user()->candidate->municipality->name}}</span>
                    </li>
                    <li class="data">
                        <span>{{ auth()->user()->email }}</span>
                    </li>
                    <li class="data">
                        <span>{{ auth()->user()->phone }}</span>
                    </li>
                    <li class="data">
                        <span>{{ auth()->user()->instructor->profession }}</span>
                    </li>
                    <li class="data">
                        <span>{{ auth()->user()->instructor->speciality}}</span>
                    </li>
                </ul>
            </div>
        </article>
    </div>
@endsection
