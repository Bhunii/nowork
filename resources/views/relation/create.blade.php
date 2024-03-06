@extends('layouts.nav.recruiter',['title' => 'Ocupation'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-occupation.css') }}">
@endsection

@section('content_profile')
<div>
    <div>
        <h4>Agregar Relacion</h4>
    </div>
    <div>
        <form action="{{ route('relation.store') }}" method="post">
        @csrf
            <input type="hidden" name="code_occupation" value="{{ $code }}">
            <div>
                <label>Codigo Ocupacion Relacionada</label>
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
                <input type="submit" value="Agregar">
            </div>
        </form>
    <div>
        <a href="{{ route('occupation.show', $code) }}">Volver</a>
    </div>
</div>
@endsection