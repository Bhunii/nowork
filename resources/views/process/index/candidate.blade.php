@extends('layouts.nav.candidate',['title' => 'Candidate - Aplicaciones'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index-occupations.css') }}">
@endsection

@section('content_profile')
<div class="container_index_occupations">
    <div class="content_title_occupations">
        <h1>Vacantes Aplicadas</h1>
    </div>
    <div class="container_general_occupations">
        <div class="container_content_occupations">
            <div class="container_header_occupations">
                <ul class="ul_header_occupation">
                    <li style="width: 25%">Company</li>
                    <li style="width: 20%">Denomination</li>
                    <li style="width: 17%">Location</li>
                    <li style="width: 15%">Selection Status</li>
                    <li style="width: 13%">Date Applied</li>
                    <li style="width: 10%">Points</li>
                    <!-- <li style="width: 10%; background: none;"></li> -->
                </ul>
            </div>
            <div class="container_data_occupations">
            @if($processes->isEmpty())
                <span>No hay ocupaciones registradas</span>
            @else
                @foreach($processes as $process)
                    <ul class="ul_data_occupation">
                        <li style="width: 25%">{{ $process->vacancy->company->name }}</li>
                        <li style="width: 20%">{{ $process->vacancy->charge->denomination->description }}</li>
                        <li style="width: 17%">{{ $process->vacancy->departament->name}} - {{ $process->vacancy->municipality->name}}</li>
                        <li style="width: 15%"><abbr title="{{ $process->selection_status->description }}">{{ $process->selection_status->name }}</abbr></li>
                        <li style="width: 13%">{{ $process->date_applied }}</li>
                        <li style="width: 10%">{{ $process->points }}</li>
                        <!-- <li style="background: none; width: 10%; gap: 9px;"></li> -->
                    </ul>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</div>

@endsection
