@extends('layouts.nav.candidate',['title' => 'Agregar Estudio'])

@section('js')
    <script src="{{ asset('js/location.js') }}" ></script>
    <script src="{{ asset('js/curriculum.js') }}" ></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/curriculum.css') }}">
@endsection
    <div class="contenido_curriculum">
        <section class="contenedor_curriculum">
            <article class="nav_curriculum">
                <button id="btn_curriculum_1" class="btn_nav btn_nav_1">Estudios</button>
            </article>
            <article class="contenedor_form_curriculum">
                <form class="form form_create_curriculum" method="post" action="">
                    <div id="contenido_curriculum_estudios" class="contenido_form_curriculum">
                        <label>Name Institution</label>
                        <input
                        class="input_style_general"
                        name="name_institution"
                        type="text"
                        value="{{ old('name_institution') }}">
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
                        value="{{ old('id_denomination') }}">
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
                        value="{{ old('addres') }}">
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
                        value="{{ old('end_date') }}">
                        @error('end_date')
                            <small>$message</small>
                        @enderror
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
