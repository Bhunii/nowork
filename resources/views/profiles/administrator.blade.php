@extends('layouts.nav.administrator',['title' => 'Your Profile'])

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
            </ul>
        </article>
    </div>
@endsection
