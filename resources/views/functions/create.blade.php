@extends('layouts.nav.recruiter',['title' => 'Ocupation'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-occupation.css') }}">
@endsection

@section('content_profile')
<div>
    <div>
        <h4>Agregar Funcion</h4>
    </div>
    <div>
        <form action="{{ route('functions.store') }}" method="post">
        @csrf
            <input type="hidden" name="code_occupation" value="{{ $code }}">
            <div>
                <label>Codigo funcion</label>
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
                <label>Descripcion funcion</label>
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
        <a href="{{ route('functions.show', $code) }}">Volver</a>
    </div>
</div>
@endsection
