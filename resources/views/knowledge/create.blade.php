@extends('layouts.nav.recruiter',['title' => 'Ocupation'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-occupation.css') }}">
@endsection

@section('content_profile')
<div>
    <div>
        <h4>Agregar Conocimiento</h4>
    </div>
    <div>
        <form action="{{ route('knowledge.store') }}" method="post">
        @csrf
            <input type="hidden" name="code_occupation" value="{{ $code }}">
            <div>
                <label>Codigo conocimiento</label>
                <input
                type="text"
                name="code"
                value="{{ old('code') }}"
                >
                @error('code')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Nombre conocimiento</label>
                <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                >
                @error('name')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <div>
                <label>Descripcion conocimiento</label>
                <textarea
                class="textarea_form_occupation"
                name="description"
                value="{{ old('description') }}"
                >@error('description')<small>{{$message}}</small>@enderror</textarea>
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