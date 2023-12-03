@extends('layouts.app',['title' => 'Your Profile'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')

<main class="main_profile">
        <div class="container_profile">
            <section class="container_nexos_profile">
                <ul class="nexos_ul">
                    <li class="nexos">
                        <a href="#">Actulizar Hoja de Vida</a>
                    </li>
                    <li class="nexos">
                        <a href="{{ route('user.edit_data', $user->id) }}">Actulizar Datos Personales</a>
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
                <article class="phrase_profile">
                    <span>Hola!,Que tal tu dia?</span>
                </article>
                <div class="profile">
                    <article class="img_profile">
                        <img src="icon_profile_woman.png" alt="icon profile">
                    </article>
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
                                <span>Un perfil ocupacional consiste en la descripción de las habilidades que un trabajador debe tener (o tiene) para ejercer eficientemente un puesto de trabajo.
                                </span>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
    </main>

@endsection
