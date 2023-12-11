@extends('layouts.app')

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')

<main class="main_profile">
        <div class="container_profile">
            <section class="container_nexos_profile">
                <article class="phrase_profile">
                        <span>Hola!,Que tal tu dia?</span>
                </article>
                <ul class="nexos_ul">
                    <li class="nexos">
                        <a href="{{ route('curriculum.index') }}">Hoja de Vida</a>
                    </li>
                    <li class="nexos">
                        <a href="{{ route('candidate.edit') }}">Actualizar Datos Personales</a>
                    </li>
                    <li class="nexos">
                        <a href="#">Ver Vacantes Aplicadas</a>
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
