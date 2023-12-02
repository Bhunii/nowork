@extends('layouts.app',['title' => 'Completed Register Instructor'])

@section('content')
    <style>
        .contenido{
            height: 1000px;
        }

        .form_register_candidate{
            height: 75%;
        }

        .form_register_candidate div{
            height: 10%;
            gap: 15%;
        }

    </style>
<main class="contenido">
    <form class="form form_register_candidate" method="post" action="{{ route('candidate.store', $user->id) }}">
        @csrf
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
            value="{{$user->phone}}"
            disabled
            >
        </div>
        <div>
            <label>Selection Status</label>
            <select name="selection_status">
                <option value="NULL"></option>
                <option value="EN ESTUDIO">En Estudio</option>
                <option value="SELECCIONADO">Seleccionado</option>
            </select>
        </div>
        <div>
            <label>Points</label>
            <input
            name="points"
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
    <h4><a href="{{ route('candidate.index') }}">Back to List</a></h4>
</main>

@endsection
