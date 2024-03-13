@extends('layouts.nav.recruiter',['title' => 'Reclutador - Aplicaciones'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index-occupations.css') }}">
@endsection

@section('content_profile')
<div class="container_index_occupations">
    <div class="content_title_occupations">
        <h1>Listado De Aspirantes</h1>
    </div>
    <div class="container_general_occupations">
        <div class="container_content_occupations">
            <div class="container_header_occupations">
                <ul class="ul_header_occupation">
                    <li style="width: 25%">Full Name</li>
                    <li style="width: 10%">phone</li>
                    <li style="width: 27%">email</li>
                    <li style="width: 8%">genre</li>
                    <li style="width: 10%">Selection Status</li>
                    <li style="width: 8%">points</li>
                    <li style="width: 12%; background: none;"></li>
                </ul>
            </div>
            <div class="container_data_occupations">
            @if($processes->isEmpty())
                <span>No hay ocupaciones registradas</span>
            @else
                @foreach($processes as $process)
                    <ul class="ul_data_occupation">
                        <li style="width: 25%">{{ $process->candidate->user->name }}  {{ $process->candidate->user->last_name }}</li>
                        <li style="width: 10%">{{ $process->candidate->user->phone }}</li>
                        <li style="width: 27%">{{ $process->candidate->user->email }}</li>
                        <li style="width: 8%">{{ $process->candidate->user->genre }}</li>
                        <li style="width: 10%">{{ $process->selection_status->name}}</li>
                        <li style="width: 8%">{{ $process->points }}</li>
                        <li style="background: none; width: 12%; gap: 9px;">
                            <a class="show_icon_general" href="#" id="index" style="background: none;">
                                <img src="{{ asset('img/show-and-more-icon.png') }}">
                            </a>
                        </li>
                    </ul>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</div>

@endsection
