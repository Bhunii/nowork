@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')

<main class="main_profile">
        <div class="container_profile">
            <section class="container_nexos_profile">
                <article class="phrase_profile">
                        <span>Hola!,Que tal tu dia instructor?</span>
                </article>
                <ul class="nexos_ul">
                    <li class="nexos">
                        <a href="#">Agregar Reclutador</a>
                    </li>
                    <li class="nexos">
                        <a href="#">Gestion Reclutadores</a>
                    </li>
                    <li class="nexos">
                        <a href="#">Ver Vacantes Registradas</a>
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
