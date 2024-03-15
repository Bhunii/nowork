@extends('layouts.nav.recruiter',['title' => 'Reclutador - Vacante'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/location.js') }}"></script>
    <script src="{{ asset('js/occupation-functions.js') }}"></script>
@endsection

@section('content_profile')

<form method="POST" action="{{route('vacancy.store')}}">
    @csrf

    <h2>Formulario Vacante</h2>
    <div>
        <label> occupational_profile</label>
        <input type="text" name="occupational_profile"/>
    </div>
    <div>
        <label> number_vacancy</label>
        <input type="number" name="number_vacancy"/>
    </div>
    <div>
        <label> workday</label>
        <input type="text" name="workday"/>
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
        <label> addres</label>
        <input type="text" name="addres"/>
    </div>
    <div>
        <label> start_date</label>
        <input type="date" name="start_date"/>
    </div>
    <div>
        <label> end_date</label>
        <input type="date" name="end_date"/>
    </div>

    <div>
        <label for="occupationSelect">Occupation</label>
        <select class="select_style_general" name="id_occupation" id="occupationSelect">
            <option value="">Select an occupation</option>
            @foreach ($occupations as $occupation)
                <option value="{{ $occupation->code_occupation }}" data-functions='@json($occupation->functions)'>{{ $occupation->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <fieldset>
            <legend>Functions</legend>
        </fieldset>
        <div id="functionsContainer">
        </div>
    </div>


    <div>
        <label> salary</label>
        <input type="text" name="salary"/>
    </div>
    <div>
        <label>Type Contract</label>
        <select class="select_style_general" name="type_contract">
            <option value="">Select an option</option>
            <option value="I">Indefinido</option>
            <option value="D">Definido</option>
        </select>
    </div>
    <div>
        <label>Payment method</label>
        <select class="select_style_general" name="payment_method">
            <option value=" ">Select an option</option>
            <option value="M">Mensual</option>
            <option value="Q">Quincenal</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Crear" class="create"/>
    </div>

</form>
@endsection
