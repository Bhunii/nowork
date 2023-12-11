@extends('layouts.nav.candidate',['title' => 'Create Curriculum'])

@section('js')
    <script src="{{ asset('js/type_language.js') }}" ></script>
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
        <button id="btn_curriculum_3" class="btn_nav btn_nav_3">Idiomas</button>        </article>
        <article class="contenedor_form_curriculum">
            <form class="form form_create_curriculum" method="post" action="">
                @csrf
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
