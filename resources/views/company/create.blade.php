@extends('layouts.app')

@section('js')
    <script src="{{ asset('js/location.js') }}"></script>
@endsection

@section('content')
<main class="contenido">
    <form class="form form_register_recruiter" method="post" action="{{ route('company.store') }}">
        @csrf
        <div>
            <label>Name</label>
            <input
            name="name"
            type="text"
            value="{{old('name')}}"
            required
            >
        </div>
        <div>
            <label>Nit</label>
            <input
            name="nit"
            type="text"
            value="{{old('nit')}}"
            required
            >
        </div>
        <div>
            <label>Company name</label>
            <input
            name="company_name"
            type="text"
            value="{{old('')}}"
            required
            >
        </div>
        <div>
            <label>Email</label>
            <input
            name="email"
            type="email"
            value="{{old('')}}"
            required
            >
        </div>
        <div>
            <label>Nature of the company</label>
            <input
            name="nature"
            type="text"
            value="{{old('')}}"
            required
            >
        </div>
        <div>
            <label>Departament</label>
            <select class="select_style_general" name="id_departament" id="departamentSelect">
                <option value="">Select an option</option>
                @foreach ($departaments as $departament)
                    <option value="{{ $departament->id }}" data-municipalities='@json($departament->municipalities)'>{{ $departament->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Municipality</label>
            <select class="select_style_general" name="id_municipality" id="municipalitySelect">
                <option value="">Select an option</option>
            </select>
        </div>
        <div>
            <label>Address</label>
            <input
            name="addres"
            type="text"
            value="{{old('')}}"
            required
            >
        </div>
        <div>
            <label>Phone</label>
            <input
            name="phone"
            type="text"
            value="{{old('')}}"
            required
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
