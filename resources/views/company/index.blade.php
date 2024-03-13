@extends('layouts.nav.recruiter',['title' => 'Reclutador - Empresa'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index-company.css') }}">
@endsection

@section('content_profile')
<section class="contenedor_index_empresa">
    <article class="contenedor_index_titulo">
        <h2>Empresa</h2>
    </article>
    <article class="contenedor_general_empresa">
        @if($company)
            <div class="contenedor_data_general">
                <div class="contenido_data_general">
                    <ul class="ul_campo_data">
                        <li>Name</li>
                        <li>NIT</li>
                        <li>Company name</li>
                        <li>Email</li>
                        <li>Nature</li>
                        <li>Departement</li>
                        <li>Municipality</li>
                        <li>Addres</li>
                        <li>Phone</li>
                    </ul>
                    <ul class="ul_valor_data">
                        <ul>{{$company->name}}</ul>
                        <ul>{{$company->nit}}</ul>
                        <ul>{{$company->company_name}}</ul>
                        <ul>{{$company->email}}</ul>
                        <ul>{{$company->nature}}</ul>
                        <ul>{{$company->departament->name}}</ul>
                        <ul>{{$company->municipality->name}}</ul>
                        <ul>{{$company->addres}}</ul>
                        <ul>{{$company->phone}}</ul>
                    </ul>
                </div>
                <div>
                    <a href="{{ route('company.edit') }}">Actualizar Datos</a>
                </div>
            </div>
        @else
            <div>
                <a href="{{ route('company.create') }}">Crear Empresa</a>
            </div>
        @endif
    </article>
</section>
@endsection


