@extends('layouts.app')

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
                        <a href="#">Empresa</a><!-- llevarlo a un index y hay un href para crear  o actualizar  u show-->
                    </li>
                    <li class="nexos">
                        <a href="#">Crear Vacante</a> <!-- llevarlo a un index  y hay el href para crear u show-->
                    </li>
                    <li class="nexos">
                        <a href="{{route('occupation.create')}}">crear ocupacion</a> <!-- lo mismo -->
                    </li>
                    <li class="nexos">
                        <a href="{{route('occupation.index')}}">ver ocpuacion</a>
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
