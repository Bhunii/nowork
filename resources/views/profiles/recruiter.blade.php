@extends('layouts.nav.recruiter',['title' => 'Your Profile'])

@section('content_profile')
    <div class="profile">
        <article class="img_profile">
            @switch(auth()->user()->genre)
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
                    <li><span> Nit </span></li>
                    <li><span> Nombre empresa </span></li>
                    <li><span> Reclutador </span></li>
                    <li><span> Documento </span></li>
                    <li><span> Ubicacion </span></li>
                    <li><span> Correo </span></li>
                    <li><span> Telefono </span></li>
                    <li><span> Fecha Admision </span></li>
                </ul>
                <ul class="data_ul">
                    @php
                        $company = auth()->user()->recruiter->company ?? null;
                        $companyName = $company ? $company->name : null;
                        $companyNit = $company ? $company->nit : null;
                    @endphp
                    <li class="data">
                        <span>{{ $companyNit ?? '' }}</span>
                    </li>
                    <li class="data">
                        <span>{{ $companyName ?? '' }}</span>
<<<<<<< HEAD
                    </li>           
=======
                    </li>
>>>>>>> origin/bryan
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
                    <li class="data">
                        <span>{{ auth()->user()->recruiter->admission_date }}</span>
                    </li>
                </ul>
            </div>
        </article>
    </div>
@endsection

