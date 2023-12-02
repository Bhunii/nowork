@extends('layouts.app',['title' => 'Form Register Role'])
@section('content')

    <style>
        .contenido{
            height: 700px
        }

        .form_register_rol{
            height: 35%;
        }

        .form_register_rol div{
            height: 35%;
            gap: 14%;
        }

    </style>
<main class="contenido">
    <form class="form form_register_rol" method="post" action="{{ route('role.store') }}">
        @csrf
        <div>
            <label>Role name</label>
            <input
            name="role_name"
            type="text"
            value=""
            >
        </div>
        <div>
            <label>Description</label>
            <input
            name="description"
            type="text"
            value=""
            >
        </div>
        <input
        type="submit"
        value="enviar"
        >
    </form>
    <h4><a href="{{ route('role.index') }}">Volver atras</a></h4>
</main>

@endsection
