@extends('layouts.app')

@section("content")

<form method="POST" action="{{route('vacancy.store')}}">
    @csrf
    
    
    <label> occupational_profile</label>
    <input type="text" name="occupational_profile"/>

    <label> number_vacancy</label>
    <input type="text" name="number_vacancy"/>

    <label> workday</label>
    <input type="text" name="workday"/>

    <label> id_departament</label>
    <input type="text" name="id_departament"/>

    <label> id_municipality</label>
    <input type="text" name="id_municipality"/>

    <label> addres</label>
    <input type="text" name="addres"/>

    <label> start_date</label>
    <input type="text" name="start_date"/>

    <label> end_date</label>
    <input type="text" name="end_date"/>



    <input type="submit" value="Crear"/>

</form>
@endsection
