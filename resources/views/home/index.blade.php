@extends('layouts.app',['title' => 'Profile'])

@section('content')

    @auth
        <!-- <p>Bienvenido {{ auth()->user()->name }}</p>
        <p>-Email: {{ auth()->user()->email }}</p>
        <p>-User Name: {{ auth()->user()->user_name }}</p> -->

            @if (auth()->user()->role_id == 1)
                <p>Rol: Administrador</p>
                <!-- <nav>
                    <menu>
                        <a href="{{ route('user.create') }}">Ver usuarios registrados</a>
                        <a href="{{ route('user.index') }}">Actualizar mis datos</a>
                        <a href="{{ route('logout') }}">Cerrar Sesión</a>
                    </menu>
                </nav> -->
            @elseif (auth()->user()->role_id == 2)
                <p>Rol: Instructor</p>
            @elseif (isset($user) && auth()->user()->role_id == 3)
                <p>Rol: Reclutador</p>
            @elseif (isset($user) && auth()->user()->role_id == 4)
                <p>Rol: Candidato</p>
                <!-- <span><a href="{{ route('user.edit_data', $user->id) }}">Actualizar Datos Basicos</a></span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Cerrar Sesión</button>
                </form> -->
            @endif
                <span>Hola</span>
        @endauth
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
