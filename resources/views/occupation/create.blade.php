@extends('layouts.nav.recruiter',['title' => 'Ocupation'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-occupation.css') }}">
@endsection

@section('content_profile')

<div class="container_form_create_occupation">
    <div class="container_title_form_create">
        <h3>Crear una Ocupacion</h3>
    </div>
    <div class="container_form_create">
        <form class="form form_create" method="POST" action="{{ route('occupation.store')}}">
            @csrf
            <div>
                <label>Codigo de ocupacion</label>
                <input
                type="text"
                name="code_occupation"
                value="{{ old('code_occupation') }}"
                >
                @error('code_occupation')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Nombre</label>
                <input
                type="text"
                name="name_occupation"
                value="{{ old('name_occupation') }}"
                >
                @error('name_occupation')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Descripcion</label>
                <textarea
                class="textarea_form_occupation"
                name="description_occupation"
                value="{{ old('description_occupation') }}"
                >@error('description_occupation')<small>{{$message}}</small>@enderror</textarea>
            </div>
            <div style="width: 100%; align-items: center; justify-content:center;">
                <input style="width: 30%;" type="submit" value="Crear" class="create" />
            </div>
        </form>
    </div>
    <div>
        <a href="{{ route('occupation.index') }}">Volver</a>
    </div>
</div>
@endsection
