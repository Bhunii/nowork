@extends('layouts.app',['title' => 'Your Profile'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<main>
    <div class="container_recruiter">
        <section class="btn_recruiter">
            <ul class="links_recruiters">
                <li class="link_recruiter">
                    <a href="#">Crear Empresa</a>
                </li>
            </ul>
            <ul class="links_recruiters">
                <li class="link_recruiter">
                    <a href="#">Ver Empresas</a>
                </li>
            </ul>
            <ul class="links_recruiters">
                <li class="link_recruiter">
                    <a href="#">Crear Vacante</a>
                </li>
            </ul>
            <ul class="links_recruiters">
                <li class="link_recruiter">
                    <a href="#">Ver vacantes</a>
                </li>
            </ul>
            <ul class="links_recruiters">
                <li class="link_recruiter">
                    <a href="{{ route('occupation.create')}}">Crear Ocupacion</a>
                </li>
            </ul>
            <ul class="links_recruiters">
                <li class="link_recruiter">
                    <a href="{{ route('occupation.index')}}">Ver ocupaciones</a>
                </li>
            </ul>
        </section>
    </div>
</main>