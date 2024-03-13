@extends('layouts.nav.recruiter',['title' => 'Your Profile'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index-occupations.css') }}">
@endsection

@section('content_profile')
<div class="container_index_occupations">
    <div class="content_title_occupations">
        <h1>Listado De Ocupaciones</h1>
    </div>
    <div class="container_general_occupations">
        <div class="container_content_occupations">
            <div class="container_header_occupations">
                <ul class="ul_header_occupation">
                    <li style="width: 15%">Code</li>
                    <li style="width: 25%">Name</li>
                    <li style="width: 48%">Description</li>
                    <li style="width: 12%; background: none;"></li>
                </ul>
            </div>
            <div class="container_data_occupations">
            @forelse($occupations as $occupation)
                <ul class="ul_data_occupation">
                    <li style="width: 15%">{{ $occupation->code_occupation }}</li>
                    <li style="width: 25%">{{ $occupation->name }}</li>
                    <li style="width: 48%">{{ $occupation->description }}</li>
                    <li style="background: none; width: 12%; gap: 9px;">
                            <a class="show_icon_general" href="{{ route('occupation.show', $occupation->code_occupation)}}">
                                <img src="{{ asset('img/show-and-more-icon.png') }}">
                            </a>
                            <a class="edit_icon_general" href="{{ route('occupation.edit', $occupation->id)}}" class="edit">
                                <img src="{{ asset('img/edit-icon.png')}}" alt="editar">
                            </a>
                            <form class="form_delete_icon" method="POST" action="{{route('occupation.destroy', $occupation->id)}}" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar-icon">
                                    <img src="{{ asset('img/delete-icon.png') }}" alt="eliminar">
                                </button>
                            </form>
                        </li>
                    </ul>
                @empty
                    <span colspan="2">No hay ocupaciones aun...</span>
                @endforelse
            </div>
        </div>
    </div>
    <div>
        <a href="{{route('occupation.create')}}" id="create">Crear nueva ocupacion</a>
    </div>
</div>

@endsection
