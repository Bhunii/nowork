@extends('layouts.nav.candidate',['title' => 'Your Profile'])

@section('js')
    <script src="{{ asset('js/occupational_profile.js') }}"></script>
@endsection

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
                    <li><span> Candidato </span></li>
                    <li><span> Documento </span></li>
                    <li><span> Ubicacion </span></li>
                    <li><span> Correo </span></li>
                    <li><span> Telefono </span></li>
                    <li><span> Perfil Ocupacional </span></li>
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
                    <li class="data data_occupational_profile">
                        <div class="contenedor_visible" id="contenedor_visible">
                            <span id="occupationalProfile">{{ auth()->user()->candidate->curriculum->occupational_profile }}</span>
                            <button id="btnShow" class="btn_update_curriculum" onclick="showContainer()">
                                Actualizar Perfil Ocupacional
                            </button>
                        </div>
                        <div class="contenedor_no_visible" id="contenedor_no_visible" style="display: none;">
                            <form class="form_edit_curriculum" method="post" action="{{ route('curriculum.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="div_input_occupational_profile">
                                    <textarea
                                        id="textarea_occupational_profile"
                                        name="occupational_profile"
                                        value="{{ auth()->user()->candidate->curriculum->occupational_profile }}"
                                        >{{ old('occupational_profile', auth()->user()->candidate->curriculum->occupational_profile) }}</textarea>
                                    @error('occupational_profile')
                                        <small>{{$message}}</small>
                                    @enderror
                                </div>
                                <div>
                                    <input class="input_general_submit" id="input_submit_edit_curriculum" type="submit" value="Actualizar">
                                    <button class="btn_general btn_update_curriculum" id="btnHide" onclick="hideContainer()">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
    </div>
@endsection
