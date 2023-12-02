@extends('layouts.app',['title' => 'Update Info Recruiter'])

@section('content')
    <style>
        .contenido{
            height: 800px;
        }

        .form_update_recruiter{
            height: 75%;
        }

        .form_update_recruiter div{
            height: 14%;
            gap: 15%;
        }

    </style>
<main class="contenido">
    <form class="form form_update_recruiter" method="post" action="{{ route('recruiter.update', $recruiter->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Document Number</label>
            <input
            name="doc_num"
            type="text"
            value="{{$recruiter->user->doc_num}}"
            disabled
            >
        </div>
        <div>
            <label>Name</label>
            <input
            name="name"
            type="text"
            value="{{$recruiter->user->name}}"
            disabled
            >
        </div>
        <div>
            <label>Last Name</label>
            <input
            name="last_name"
            type="text"
            value="{{$recruiter->user->last_name}}"
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
