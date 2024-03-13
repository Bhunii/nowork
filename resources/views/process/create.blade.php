@extends('layouts.nav.recruiter',['title' => 'Reclutador - Aplicaciones'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
        }
    </style>
@endsection

@section('content_profile')
    <main class="contenido_form">
        <form class="form form_update_company" style="overflow-y: auto;" method="post" action="{{ route('process.store') }}">
            @csrf
            <div>

                <label>Codigo de vacante:</label>
                <input type="text" name="id_vacancy"/>

                <label class="label_style_general">Education Points</label>
                <input
                    class="input_style_general"
                    name="points1"
                    type="number"
                    value="{{ old('points1') }}"
                    required
                >
                @error('points1')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Experience Points</label>
                <input
                    class="input_style_general"
                    name="points2"
                    type="number"
                    value="{{ old('points2') }}"
                    required
                >
                @error('points2')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <label class="label_style_general">Languages Points</label>
                <input
                    class="input_style_general"
                    name="points3"
                    type="number"
                    value="{{ old('points3') }}"
                    required
                >
                @error('points3')
                    <small>$message</small>
                @enderror
            </div>
            <div>
                <input
                    class="input_general_submit"
                    type="submit"
                    value="Guardar Puntos"
                >
            </div>
        </form>
    </main>
@endsection
