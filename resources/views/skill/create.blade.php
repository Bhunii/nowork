@extends('layouts.nav.recruiter',['title' => 'Ocupation'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-occupation.css') }}">
@endsection

@section('content_profile')
<div>
    <div>
        <h4>Agregar habilidad</h4>
    </div>
    <div>
        <form action="{{ route('skill.store') }}" method="post">
        @csrf
            <input type="hidden" name="code_occupation" value="{{ $code }}">
            <div>
                <label>Codigo habilidad</label>
                <input
                type="text"
                name="code"
                value="{{ old('code_function') }}"
                >
                @error('code_function')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Nombre de habilidad</label>
                <input
                type="text"
                name="name"
                value="{{ old('name_function') }}"
                >
                @error('name_function')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Descripcion de habilidad</label>
                <textarea
                class="textarea_form_occupation"
                name="description"
                value="{{ old('description_function') }}"
                >@error('description_function')<small>{{$message}}</small>@enderror</textarea>
            </div>
            <div>
                <input type="submit" value="Agregar">   
            </div>
        </form>
    <div>
        <a href="{{ route('occupation.show', $code) }}">Volver</a>
    </div>
</div>
@endsection