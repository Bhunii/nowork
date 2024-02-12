@extends('layouts.nav.recruiter', ['title' => 'Reclutador - Ocupaciones']);

@section('css')
 <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content_profile')

<h1>Edicion de ocupacion</h1>
<form method="POST" action="{{ route('occupation.update', $occupation->id)}}">
    @method('PUT')
    @csrf
    <label>Codigo de ocupacion:</label>
    <input type="text" name="code_occupation" value="{{$occupation->code_occupation}}">

    <label>Nombre de ocupacion:</label>
    <input type="text" name="name" value="{{$occupation->name}}">
    
    <label>Descripcion del occupation:</label>
    <input type="text" name="description" value="{{$occupation->description}}"/>
    <input type="submit" value="Update" class="actualizar">
    
    <button class="actualizar"><a href="{{route('occupation.index')}}" class="volver">Back</a></button>
</form>

@endsection