@extends('layouts.nav.candidate',['title' => 'Your Profile'])

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content_profile')
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
                    <button id="btnShow" class="btn_update_curriculum" onclick="ShowContainer()">
                        Actualizar Perfil Ocupacional
                    </button>
                    <div class="show_hide_container">
                        <form class="form_edit_curriculum" method="post" action="{{ route('curriculum.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="div_input_occupational_profile">
                                <textarea
                                id="textarea_occupational_profile"
                                name="occupational_profile"
                                type="text"
                                value="{{ old('occupational_profile', auth()->user()->candidate->curriculum->occupational_profile) }}"
                                >Aqui va tu perfil ocupacional.</textarea>
                                @error('occupational_profile')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                            <div>
                                <input class="input_general_submit" id="input_submit_edit_curriculum" type="submit" value="Actualizar">
                                <button class="btn_general btn_update_curriculum" id="btnHide" onclick="HideContainer()">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </article>
    </div>
@endsection
