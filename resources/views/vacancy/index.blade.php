@extends('layouts.nav.recruiter',['title' => 'Reclutador - Vacantes'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index-occupations.css') }}">
@endsection

@section('content_profile')
<div class="container_index_occupations">
    <div class="content_title_occupations">
        <h1>Listado De Vacantes</h1>
    </div>
    <div class="container_general_occupations">
        <div class="container_content_occupations">
            <div class="container_header_occupations">
                <ul class="ul_header_occupation">
                    <li style="width: 15%">Denomination</li>
                    <li style="width: 25%">Location</li>
                    <li style="width: 48%">Number vacantes</li>
                    <li style="width: 12%; background: none;"></li>
                </ul>
            </div>
            <div class="container_data_occupations">
            @if($vacancies->isEmpty())
                <span>No hay ocupaciones registradas</span>
            @else
                @foreach($vacancies as $vacancy)
                    <ul class="ul_data_occupation">
                        <li style="width: 15%">{{ $vacancy->charge->description }}</li>
                        <li style="width: 25%">{{ $vacancy->departament->name }} - {{ $vacancy->municipality->name }}</li>
                        <li style="width: 48%">{{ $vacancy->number_vacancy }}</li>
                        <li style="background: none; width: 12%; gap: 9px;">
                            <a class="show_icon_general" href="{{ route('process.index', $vacancy->id) }}" id="index" style="background: none;">
                                <img src="{{ asset('img/process-candidates-icon.png') }}">
                            </a>
                            <form class="form_delete_icon" method="POST" action="{{route('vacancy.destroy', $vacancy->id)}}" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar-icon">
                                    <img src="{{ asset('img/delete-icon.png') }}" alt="eliminar">
                                </button>
                            </form>
                        </li>
                    </ul>
                @endforeach
            @endif
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('vacancy.create') }}">Crear vacante</a>
    </div>
</div>

@endsection
