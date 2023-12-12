@extends('layouts.nav.recruiter',['title' => 'Your Profile'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/location.js') }}"></script>
@endsection

@section('content_profile')

<form method="POST" action="{{route('vacancy.store')}}">
    @csrf



    <h2>Formulario Vacante</h2>

    <label>id de company</label>
    <input type="text" name="id_company">

    <label> occupational_profile</label>
    <input type="text" name="occupational_profile"/>

    <label> number_vacancy</label>
    <input type="text" name="number_vacancy"/>

    <label> workday</label>
    <input type="text" name="workday"/>

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

    <label> addres</label>
    <input type="text" name="addres"/>

    <label> start_date</label>
    <input type="date" name="start_date"/>

    <label> end_date</label>
    <input type="date" name="end_date"/>



    <h2>form charge </h2>
    <label> id_denomination</label>
    <input type="text" name="id_denomination"/>

    <label> id_function</label>
    <input type="text" name="id_function"/>

    <label>Payment method</label>
        <select class="select_style_general" name="payment_method">
            <option value="">Select an option</option>
            <option value="M">M</option>
            <option value="Q">Q</option>
        </select>


    <label> salary</label>
    <input type="text" name="salary"/>

    <label>Type Contract</label>
        <select class="select_style_general" name="type_contract">
            <option value="">Select an option</option>
            <option value="I">I</option>
            <option value="D">D</option>
        </select>

    <input type="submit" value="Crear" class="create"/>

</form>
@endsection
