@extends('layouts.nav.candidate',['title' => 'Create Curriculum'])

@section('js')
    <script src="{{ asset('js/location.js') }}" ></script>
    <script src="{{ asset('js/type_language.js') }}" ></script>
    <script src="{{ asset('js/profile.js') }}" ></script>
    <script src="{{ asset('js/curriculum.js') }}" ></script>
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
            background-color: d3d3d3;
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
                <button id="btn_curriculum_1" onclick="openCurriculumStudies()" class="btn_nav btn_nav_1">Estudios</button>
                <button id="btn_curriculum_2" onclick="openCurriculumExperiences()" class="btn_nav btn_nav_2">Experiencias</button>
                <button id="btn_curriculum_3" onclick="openCurriculumLanguages()" class="btn_nav btn_nav_3">Idiomas</button>
            </article>
            <article class="contenedor_form_curriculum">
                <form class="form form_create_curriculum">
                    <div id="contenido_curriculum_estudios" class="contenido_form_curriculum">
                        <div>
                            <label>Name Institution</label>
                            <input
                            class="input_style_general"
                            name="name_institution"
                            type="text"
                            value="{{ old('name_institution') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label>Denomination</label>
                            <input
                            class="input_style_general"
                            name="id_denomination"
                            type="text"
                            value="{{ old('id_denomination') }}">
                            @error('')
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
                            value="{{ old('addres') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label>End Date</label>
                            <input
                            class="input_style_general"
                            name="end_date"
                            type="date"
                            value="{{ old('end_date') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                    </div>

                    <div id="contenido_curriculum_experiencias" class="contenido_form_curriculum">
                        <div>
                            <label>Name Company</label>
                            <input
                            class="input_style_general"
                            name="name_company"
                            type="text"
                            value="{{ old('name_company') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label>Addres</label>
                            <input
                            class="input_style_general"
                            name="company_addres"
                            type="text"
                            value="{{ old('') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label>Denominacion</label>
                            <input
                            class="input_style_general"
                            name="id_denominacion_company"
                            type="text"
                            value="{{ old('id_denominacion_company') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label>Functions</label>
                            <input
                            class="input_style_general"
                            name="id_function"
                            type="text"
                            value="{{ old('id_function') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label>Start Date</label>
                            <input
                            class="input_style_general"
                            name="start_date"
                            type="date"
                            value="{{ old('start_date') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label>End Date</label>
                            <input
                            class="input_style_general"
                            name="end_date_company"
                            type="date"
                            value="{{ old('end_date_company') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                    </div>

                    <div id="contenido_curriculum_idiomas" class="contenido_form_curriculum">
                        <div>
                            <label>Tipo idioma</label>
                            <select class="select_style_general" name="tipo_idioma" id="tipoIdiomaSelect">
                                <option value="">Select an option</option>
                                <option value="ingles">Ingles</option>
                                <option value="aleman">Aleman</option>
                                <option value="ruso">Ruso</option>
                            </select>
                        </div>
                        <div>
                            <label>Nivel idioma</label>
                            <select class="select_style_general" name="id_type_language" id="nivelIdiomaSelect">
                                <option value="">Select an option</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <input
                        class="input_general_submit"
                        type="submit"
                        value="Crear">
                    </div>
                </form>
            </article>
        </section>
    </div>
@endsection
