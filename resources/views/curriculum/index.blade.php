@extends('layouts.nav.candidate',['title' => 'Curriculum'])

@section('js')
    <script src="{{ asset('js/profile.js') }}" ></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/curriculum-index.css') }}">
@endsection

@section('content_profile')
    @if($curriculum)
        <section class="contenedor_curriculum">
            <article class="">
                <div>
                    <h3>Hoja de Vida</h3>
                </div>
            </article>
            @if($curriculum->studies->isNotEmpty())
                <article class="contenedor_data_curriculum">
                    <div class="curriculum_data_usuario">
                        <span>Tienes estudio agregado</span>
                        <span>Detalles</span>
                        <a href="{{ route('study.index') }}">Ir a Estudios</a>
                    </div>
                </article>
            @else
                <article class="contenedor_data_curriculum">
                    <div class="curriculum_empty_data_usuario">
                        <span>No tienes ningun estudio agregado</span>
                        <span>Detalles</span>
                        <a href="{{ route('study.index') }}">Ir a Estudios</a>
                    </div>
                </article>
            @endif

            @if($curriculum->experiences->isNotEmpty())
                <article class="contenedor_data_curriculum">
                    <div class="curriculum_data_usuario">
                        <span>Tienes experiencia agregado</span>
                        <span>Detalles</span>
                        <a href="{{ route('experience.index') }}">Ir a Experiencias</a>
                    </div>
                </article>
            @else
            <article class="contenedor_data_curriculum">
                    <div class="curriculum_empty_data_usuario">
                        <span>No tienes ninguna experiencia agregado</span>
                        <span>Detalles</span>
                        <a href="{{ route('experience.index') }}">Ir a Experiencias</a>
                    </div>
                </article>
            @endif

            @if($curriculum->languages->isNotEmpty())
                <article class="contenedor_data_curriculum">
                    <div class="curriculum_data_usuario">
                        <span>Tienes idioma agregado</span>
                        <span>Detalles</span>
                        <a href="{{ route('language.index') }}">Ir a Idiomas</a>
                     </div>
                </article>
            @else
                <article class="contenedor_data_curriculum">
                    <div class="curriculum_empty_data_usuario">
                        <span>No tienes ningun idioma agregado</span>
                        <span>Detalles</span>
                        <a href="{{ route('language.index') }}">Ir a Idiomas</a>
                     </div>
                </article>
            @endif
        </section>
    @endif
@endsection
