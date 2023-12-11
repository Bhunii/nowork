@extends('layouts.nav.administrator',['title' => 'Usuario'])

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-show.css') }}">
@endsection

@section('content_profile')
<section class="contenedor_show_general">
    <article>
        <h3>Datos del usuario</h3>
    </article>
    <article class="contenedor_data_general">
        <div class="contenido_data_general">
            <ul class="ul_campo_data">
                <li>Nombre</li>
                <li>Apellidos</li>
                <li>Tipo Documento</li>
                <li>Numero Documento</li>
                <li>Celular</li>
                <li>Nombre Usuario</li>
                <li>Correo Electronico</li>
                <li>Genero</li>
                <li>Departamento</li>
                <li>Municipio</li>
                <li>Nombre Role</li>
            </ul>
            <ul class="ul_valor_data">
                <li>{{$user->name}}</li>
                <li>{{$user->last_name}}</li>
                <li>{{$user->doc_type}}</li>
                <li>{{$user->doc_num}}</li>
                <li>{{$user->phone}}</li>
                <li>{{$user->user_name}}</li>
                <li>{{$user->email}}</li>
                <li>{{$user->genre}}</li>
                <li>{{$user->candidate->departament->name}}</li>
                <li>{{$user->candidate->municipality->name}}</li>
                <li>{{$user->role->role_name}}</li>
            </ul>
        </div>
    </article>
    <article>
        <a href="{{route('user.index')}}">Back</a>
    </article>
</section>
@endsection
