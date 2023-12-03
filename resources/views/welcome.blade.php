@extends('layouts.app',['title' => 'Home'])

@section('content')

    <h2>Hola, esto es el welcome/home.</h2>

    @guest
        <p>Usuario invitado</p>

    @endguest


@endsection
