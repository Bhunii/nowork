@extends('layouts.app',['title' => 'Update Info Instructor'])

@section('content')
    <style>
        .contenido{
            height: 800px;
        }

        .form_update_candidate{
            height: 75%;
        }

        .form_update_candidate div{
            height: 14%;
            gap: 15%;
        }

    </style>
<main class="contenido">
    <form class="form form_update_candidate" method="post" action="{{ route('candidate.update', $candidate->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Document Number</label>
            <input
            name="doc_num"
            type="text"
            value="{{$candidate->user->doc_num}}"
            disabled
            >
        </div>
        <div>
            <label>Name</label>
            <input
            name="name"
            type="text"
            value="{{$candidate->user->name}}"
            disabled
            >
        </div>
        <div>
            <label>Last Name</label>
            <input
            name="last_name"
            type="text"
            value="{{$candidate->user->last_name}}"
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
