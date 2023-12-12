@extends('layouts.nav.candidate',['title' => 'Curriculum - Estudio'])

@section('js')
    <script src="{{ asset('js/location.js') }}" ></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/curriculum.css') }}">
@endsection

@section('style')
    <style>
        .contenido_form{
            width: 100%;
        }

        .form_create_curriculum{
            display: flex;
            width: 80%;
            align-items: flex-start;
            justify-content: center;
            background: none;
            border: none;
            padding: 11px 16px;
            overflow: hidden;
        }

        /* .form_edit_curriculum::-webkit-scrollbar {
            width: 8px;
            height: 5px;
        } */
        .input_style_general, .select_style_general{
            height: 39px;
        }
        .input_general_submit{
            margin: 0 75px;
        }

    </style>
@endsection

@section('content_profile')
    <div class="contenido_curriculum">
        <section class="contenedor_curriculum">
            <article class="nav_curriculum">
                <button id="btn_curriculum_1" class="btn_nav btn_nav_1">Estudios</button>
            </article>
            <article class="contenedor_form_curriculum">
                <form class="form form_create_curriculum" method="post" action="{{ route('study.update', $study->id) }}">
                    @csrf
                    @method('PUT')
                    <div><!-- id="contenido_curriculum_estudios" class="contenido_form_curriculum" -->
                        <label>Name Institution</label>
                        <input
                        class="input_style_general"
                        name="name_institution"
                        type="text"
                        value="{{ $study->name_institution }}"
                        disabled>
                        @error('name_institucion')
                            <small>$message</small>
                        @enderror
                    </div>
                    <div>
                        <label>Denomination</label>
                        <input
                        class="input_style_general"
                        name="id_denomination"
                        type="text"
                        value="{{ $study->id_denomination }}"
                        disabled>
                        @error('id_denomination')
                            <small>$message</small>
                        @enderror
                    </div>
                    <div>
                        <label>Departament</label>
                        <select class="select_style_general" name="id_departament" id="departamentSelect">
                            <option value="">Select an option</option>
                            @foreach ($departaments as $departament)
                                <option value="{{ $departament->id }}" data-municipalities='@json($departament->municipalities)'>{{ $departament->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label>Municipality</label>
                        <select class="select_style_general" name="id_municipality" id="municipalitySelect">
                            <option value="">Select an option</option>
                        </select>
                    </div>
                    <div>
                        <label>Addres</label>
                        <input
                        class="input_style_general"
                        name="addres"
                        type="type"
                        value="{{ $study->addres }}">
                        @error('addres')
                            <small>$message</small>
                        @enderror
                    </div>
                    <div>
                        <label>End Date</label>
                        <input
                        class="input_style_general"
                        name="end_date"
                        type="date"
                        value="{{ $study->end_date }}">
                        @error('end_date')
                            <small>$message</small>
                        @enderror
                    </div>
                    <div>
                        <input
                        class="input_general_submit"
                        type="submit"
                        value="Actualizar">
                    </div>
                </form>
            </article>
            <article>
                <a href="{{route('study.index')}}">Back</a>
            </article>
        </section>
    </div>
@endsection
