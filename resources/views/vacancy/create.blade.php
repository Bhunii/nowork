@extends('layouts.nav.recruiter',['title' => 'Reclutador - Vacante'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/location.js') }}"></script>
    <script src="{{ asset('js/charge.js') }}"></script>
@endsection

@section('content_profile')

<form method="POST" action="{{route('vacancy.store')}}">
    @csrf

    <h2>Formulario Vacante</h2>

    <label> occupational_profile</label>
    <input type="text" name="occupational_profile"/>

    <label> number_vacancy</label>
    <input type="number" name="number_vacancy"/>

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

    <div>
        <label for="occupationSelect">Occupation</label>
        <select class="select_style_general" name="id_occupation" id="occupationSelect">
            <option value="">Select an occupation</option>
            @foreach ($occupations as $occupation)
                <option value="{{ $occupation->id }}" data-functions='@json($occupation->functions)'>{{ $occupation->name }}</option>
            @endforeach
        </select>
    </div>

    <div id="functionsContainer">
        <label for="functionsCheckboxList">Functions</label>
        <div id="functionsCheckboxList"></div>
    </div>

    <label> salary</label>
    <input type="text" name="salary"/>

    <label>Type Contract</label>
        <select class="select_style_general" name="type_contract">
            <option value="">Select an option</option>
            <option value="I">Indefinido</option>
            <option value="D">Definido</option>
        </select>

    <label>Payment method</label>
        <select class="select_style_general" name="payment_method">
            <option value=" ">Select an option</option>
            <option value="M">Mensual</option>
            <option value="Q">Quincenal</option>
        </select>

    <input type="submit" value="Crear" class="create"/>

</form>
@endsection
