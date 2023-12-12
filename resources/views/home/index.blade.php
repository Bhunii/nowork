@extends('layouts.app', ['title' => 'Home'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

@auth
    @if (auth()->user()->role_id == 1)
        <p>Rol: Administrador</p>
    @elseif (auth()->user()->role_id == 2)
        <p>Rol: Instructor</p>
    @elseif (isset($user) && auth()->user()->role_id == 3)
        <p>Rol: Reclutador</p>
    @elseif (isset($user) && auth()->user()->role_id == 4)
        <p>Rol: Candidato</p>
    @endif
    <span>Hola</span>
@else
    <body>
        <header class="header">
            <a href="#" class="logo">Nowork</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <nav class="navbar">
                <a href="#" class="active">Home</a>
                <a href="{{ route('company.create') }}">Companies</a>
                <a href="#">Contacts</a>
            </nav>
        </header>

        <section class="home" id="home">
            <div class="home-content">
                <h1>Welcome to <span>Nowork</span></h1>
                <div class="animacion-text">
                    <h3 style="width: 800px;">Tu plataforma integral para <span>la Selección de Personal</span></h3>
                </div>
                <p>En el dinámico mundo empresarial actual, la clave del éxito reside en contar con un equipo de profesionales talentosos y comprometidos. En Nowork, entendemos que la elección del personal adecuado es un factor determinante para el crecimiento
                    y la prosperidad de cualquier organización.</p>
                <div class="animacion-text">
                    <h3 style="width: 650px;">Usuario invitado</h3>
                </div>
                <nav>
                    <div class="btn-box">
                        <a class="btn" href="{{ route('login') }}">Iniciar sesión</a>
                        <a class="btn" href="{{ route('user.create') }}">Nuevo Usuario</a>
                    </div>
                </nav>
            </div>
        </section>

    </body>

    </html>
@endguest

@endsection
