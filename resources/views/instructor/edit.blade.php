@extends('layouts.app',['title' => 'Update Info Instructor'])

@section('content')
    <style>
        .contenido{
            height: 800px;
        }

        .form_update_instructor{
            height: 75%;
        }

        .form_update_instructor div{
            height: 14%;
            gap: 15%;
        }

    </style>
<main class="contenido">
    <form class="form form_update_instructor" method="post" action="{{ route('instructor.update', $instructor->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Document Number</label>
            <input
            name="doc_num"
            type="text"
            value="{{$instructor->user->doc_num}}"
            disabled
            >
        </div>
        <div>
            <label>Name</label>
            <input
            name="name"
            type="text"
            value="{{$instructor->user->name}}"
            disabled
            >
        </div>
        <div>
            <label>Last Name</label>
            <input
            name="last_name"
            type="text"
            value="{{$instructor->user->last_name}}"
            disabled
            >
        </div>
        <div>
            <label>Profession</label>
            <input
            name="profession"
            type="text"
            value=""
            >
        </div>
        <div>
            <label>Speciality</label>
            <input
            name="speciality"
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
    <h4><a href="{{ route('instructor.index') }}">Back to List</a></h4>
</main>

@endsection
