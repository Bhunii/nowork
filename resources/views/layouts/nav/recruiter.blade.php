@extends('layouts.nav.recruiter',['title' => 'Update Data'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')

<main class="main_profile">
        <div class="container_profile">
            <section class="container_nexos_profile">
                <article class="phrase_profile">
                        <span>Hola!,Que tal tu dia reclutador?</span>
                </article>
                <ul class="nexos_ul">
                    <li class="nexos">
                        <a href="{{route('company.index')}}">Empresa</a>
                    </li>
                    <li class="nexos">
                        <a href="{{route('vacancy.index')}}">Vacantes</a>
                    </li>
                    <li class="nexos">
                        <a href="{{route('occupation.index')}}">Ocupaciones</a>
                    </li>   
                    <li class="nexos">
                        <a href="{{ route('recruiter.edit') }}">Actualizar Datos Personales</a>
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
                @yield('content_profile')
            </section>
        </div>
    </main>
@endsection
