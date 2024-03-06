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
            <div>
                <h4>Denominaciones</h4>
            </div>
            <div>
                <label>Codigo de denominacion:</label>
                <input
                type="text"
                name="code_denomination"
                value="{{ old('code_denomination') }}"
                >
                @error('code_denomination')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Descripcion de denominacion:</label>
                <textarea
                class="textarea_form_occupation"
                name="description_denomination"
                value="{{ old('description_denomination') }}"
                >@error('description_denomination')<small>{{$message}}</small>@enderror</textarea>
            </div>
            <div>
                <h4>Ocupaciones Relacionadas</h4>
            </div>
            <div>
                <label>Codigo de ocupacion relacionada=opcional:</label>
                <input
                type="text"
                name="code_occupation_relation"
                value="{{ old('code_occupation_relation') }}"
                >
                @error('code_occupation_relation')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <h4>Habilidades</h4>
            </div>
            <div>
                <label>Codigo de habilidad:</label>
                <input
                type="text"
                name="code_skill"
                value="{{ old('code_skill') }}"
                >
                @error('code_skill')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Nombre de habilidad:</label>
                <input
                type="text"
                name="name_skill"
                value="{{ old('name_skill') }}"
                >
                @error('name_skill')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Descripcion de habilidad:</label>
                <textarea
                class="textarea_form_occupation"
                name="description_skill"
                value="{{ old('description_skill') }}"
                >@error('description_skill')<small>{{$message}}</small>@enderror</textarea>
            </div>
            <div>
                <h4>Conocimientos</h4>
            </div>
            <div>
                <label>Codigo de conocimiento:</label>
                <input
                type="text"
                name="code_knowledge"
                value="{{ old('code_knowledge') }}"
                >
                @error('name_knowledge')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Nombre de conocimiento:</label>
                <input
                type="text"
                name="name_knowledge"
                value="{{ old('name_knoledge') }}"
                >
                @error('name_knoledge')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Descripcion de conocimiento:</label>
                <textarea
                class="textarea_form_occupation"
                name="description_knowledge"
                value="{{ old('description_knoledge') }}"
                >@error('description_knoledge')<small>{{$message}}</small>@enderror</textarea>
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
