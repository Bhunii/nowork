@extends('layouts.app')

@section('content')
<main class="contenido">
    <form class="form form_register_recruiter" method="post" action="{{ route('companies.store', $companies->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input
            name="name"
            type="text"
            value="{{$companies->name}}"
            disabled
            >
        </div>
        <div>
            <label>Nit</label>
            <input
            name="name"
            type="text"
            value="{{$companies->nit}}"
            disabled
            >
        </div>
        <div>
            <label>Company name</label>
            <input
            name="name"
            type="text"
            value="{{$companies->company_name}}"
            disabled
            >
        </div>
        <div>
            <label>Email</label>
            <input
            name="email"
            type="text"
            value="{{$user->email}}"
            disabled
            >
        </div>
        <div>
            <label>Nature of the company</label>
            <input
            name="admission_date"
            type="date"
            value="{{$companies->nature}}"
            required
            >
        </div>
        <div>
            <label>Id departament</label>
            <input
            name="id_departament"
            type="text"
            value="{{$companies->id_departament}}"
            required
            >
        </div>
        <div>
            <label>Id municipality</label>
            <input
            name="id_municipality"
            type="text"
            value="{{$companies->id_municipality}}"
            required
            >
        </div>
        <div>
            <label>Address</label>
            <input
            name="addres"
            type="date"
            value="{{$companies->addres}}"
            required
            >
        </div>
        <div>
            <label>Phone</label>
            <input
            name="phone"
            type="text"
            value="{{$companies->phone}}"
            disabled
            >
        </div>
        <input
        type="submit"
        value="enviar"
        >
    </form>
    <h4><a href="{{ route('company.index') }}">Back to List</a></h4>
</main>

@endsection
