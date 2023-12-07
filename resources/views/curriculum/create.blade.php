@extends('layouts.nav.candidate',['title' => 'Create Curriculum'])

@section('js')
    <script src="{{ asset('js/location.js') }}" ></script>
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
            padding: 11px;
        }

        .form_edit_curriculum{
            width: 80%;
            max-height: 650px;
            background: none;
            border: none;
            gap: 21px;
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
            margin: 0 50px;
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
                <form>
                    <div id="contenido_curriculum_studies">
                        <div>
                            <label>Name Institution</label>
                            <input
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
                            name="end_date"
                            type="date"
                            value="{{ old('end_date') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                    </div>

                    <div id="contenido_curriculum_experiences">
                        <div>
                            <label></label>
                            <input
                            name=""
                            type=""
                            value="{{ old('') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label></label>
                            <input
                            name=""
                            type=""
                            value="{{ old('') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                    </div>

                    <div id="contenido_curriculum_languages">
                        <div>
                            <label>Tipo idioma</label>
                            <select class="select_style_general" name="tipo_idioma">
                                <option value="">Select an option</option>
                                <option value="ingles">Ingles</option>
                                <option value="aleman">Aleman</option>
                                <option value="ruso">Ruso</option>
                            </select>
                        </div>
                        <div>
                            <label>Nivel idioma</label>
                            <select>
                                <option value="">Select an option</option>
                                @switch(old('ipo_idioma'))
                                    @case("ingles")
                                        <option value="1">A1</option>
                                        <option value="2">A2</option>
                                    @case("aleman")
                                        <option value="7">A1</option>
                                        <option value="8">A2</option>
                                    @case("ruso")
                                        <option value="13">A1</option>
                                        <option value="14">A2</option>
                                @endswitch
                            </select>
                        </div>
                        <div>
                            <label></label>
                            <input
                            name=""
                            type=""
                            value="{{ old('') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label></label>
                            <input
                            name=""
                            type=""
                            value="{{ old('') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label></label>
                            <input
                            name=""
                            type=""
                            value="{{ old('') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                        <div>
                            <label></label>
                            <input
                            name=""
                            type=""
                            value="{{ old('') }}">
                            @error('')
                                <small>$message</small>
                            @enderror
                        </div>
                    </div>
                </form>
            </article>
        </section>
    </div>
@endsection
