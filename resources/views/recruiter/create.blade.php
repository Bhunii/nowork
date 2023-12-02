@extends('layouts.app',['title' => 'Completed Register Instructor'])

@section('content')
    <style>
        .contenido{
            height: 900px;
        }

        .form_register_recruiter{
            height: 75%;
        }

        .form_register_recruiter div{
            height: 11%;
            gap: 15%;
        }

    </style>
<main class="contenido">
    <form class="form form_register_recruiter" method="post" action="{{ route('recruiter.store', $user->id) }}">
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
            <label>Admission Date</label>
            <input
            name="admission_date"
            type="date"
            value=""
            required
            >
        </div>
        <input
        type="submit"
        value="enviar"
        >
    </form>
    <h4><a href="{{ route('recruiter.index') }}">Back to List</a></h4>
</main>

@endsection
