@extends('layouts.app',['title' => 'Your Profile'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/recruiter_profile.css') }}">
@endsection

@section('content')

<main class="main_profile">
        <div class="container_profile">
            <section class="container_nexos_profile">
                <ul class="nexos_ul">
                    <li class="nexos">
                        <a href="#">Crear Empresa</a>
                    </li>
                    <li class="nexos">
                        <a href="#">Ver Empresas</a>
                    </li>
                    <li class="nexos">
                        <a href="{{route('vacancy.create')}}">Crear Vacante</a>
                    </li>
                    <li class="nexos">
                        <a href="{{route('vacancy.index')}}">Ver Vacante</a>
                    </li>
                    <li class="nexos">
                        <a href="{{route('occupation.create')}}">Crear Ocupacion</a>
                    </li>
                    <li class="nexos">
                        <a href="{{route('occupation.index')}}">Ver Ocupacion</a>
                    </li>
                    <li class="nexos">
                        <a href="#">Ajustes</a>
                    </li>
                    <li class="nexos nexo_logout">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" value="Logout"></input>
                        </form>
                    </li>
                </ul>
            </section>

            <section class="container_general_profile">
                <article class="phrase_profile">
                    <span>Hola!,Que tal tu dia?</span>
                </article>
                <div class="profile">
                    
                    <article class="data_profile">
                        <ul class="data_ul">
                            <li class="data data_title">
                                <h2>Informacion del Perfil</h2>
                            </li>
                            <li class="data">
                                <span>{{ auth()->user()->name }}</span> <span>{{ auth()->user()->last_name }}</span>
                            </li>
                            <li class="data">
                                <span>{{ auth()->user()->doc_type }}</span> <span>{{ auth()->user()->doc_num }}</span>
                            </li>
                            <li class="data">
                                <span>Ciudad</span>
                            </li>
                            <li class="data">
                                <span>{{ auth()->user()->email }}</span>
                            </li>
                            <li class="data">
                                <span>{{ auth()->user()->phone }}</span>
                            </li>
                            <li class="data data_occupational_profile">
                                <span>
                                </span>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
    </main>

@endsection
