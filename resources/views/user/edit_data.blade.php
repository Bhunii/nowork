@extends('layouts.nav.administrator',['title' => 'Editar Rol Usuario'])

@section('js')
    <script src="{{ asset('js/profile.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('style')
    <style>
        .contenido{
            height: 800px;
        }

        .form_update_user{
            height: 75%;
        }

        .form_update_user div{
            height: 14%;
            gap: 15%;
        }

    </style>
@endsection

@section('content')

<section class="contenido">
    <form class="form form_update_user" method="post" action="{{ route('user.update_data', $user->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Document Number</label>
            <input
            name="doc_num"
            type="text"
            value="{{$user->doc_num}}"
            disabled
            >
        </div>
        <div>
            <label>Name</label>
            <input
            name="name"
            type="text"
            value="{{$user->name}}"
            disabled
            >
        </div>
        <div>
            <label>Last Name</label>
            <input
            name="last_name"
            type="text"
            value="{{$user->last_name}}"
            disabled
            >
        </div>
        <div>
            <label>Phone</label>
            <input
            name="phone"
            type="text"
            value=""
            required
            >
        </div>
        <div>
            <label>User Name</label>
            <input
            name="user_name"
            type="text"
            value=""
            required
            >
        </div>
        <div>
            <label>Email</label>
            <input
            name="email"
            type="text"
            value=""
            required
            >
        </div>
        <input
        type="submit"
        value="enviar"
        >
    </form>
    <h4><a href="{{ route('home.index') }}">Volver</a></h4>
</section>

@endsection
