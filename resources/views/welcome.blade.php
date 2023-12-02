@extends('layouts.app',['title' => 'Home'])

@section('content')

    <h2>Hola, esto es el welcome/home.</h2>

        @guest
            <p>Usuario invitado</p>
            <nav>
                <menu>
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                    <a href="{{ route('user.create') }}">Nuevo Usuario</a>
                </menu>
            </nav>
        @endguest


@endsection
