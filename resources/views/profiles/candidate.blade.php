@extends('layouts.app',['title' => 'Your Profile'])

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
                        @switch($user->genre)
                            @case("M")
                                <img class="icon_profile2" src="icon_profile1.png" alt="icon profile">
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
                                <li class="data data_occupational_profile">
                                    <span>{{ auth()->user()->candidate->curriculum->occupational_profile }}</span>
                                    <button id="btnShow" class="btnUpdateCurriculum" onclick="ShowContainer()">
                                        Actualizar Pefil Ocupacional
                                    </button>
                                    <div class="show_hide_container">
                                        <form class="form_edit_curriculum" method="post" action="{{ route('curriculum.update') }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="div_input_occupational_profile">
                                                <input
                                                name="occupational_profile"
                                                type="text"
                                                value="{{ old('occupational_profile', auth()->user()->candidate->curriculum->occupational_profile) }}"
                                                >
                                                @error('occupational_profile')
                                                    <small>{{$message}}</small>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="submit" value="Actualizar">
                                                <button id="btnHide" class="btnUpdateCurriculum" onclick="HideContainer()">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
    </main>
@endsection
