@extends('layouts.app', ['title' => 'Home'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('style')

@endsection

@section('content')
    <main class="contenedor-home">
        <section class="home" id="home">
            <div class="home-content">
                <h1>Welcome to <span>Nowork</span></h1>
                <div class="animacion-text">
                    <h3 style="width: 800px;">Tu plataforma integral para <span>la Selección de Personal</span></h3>
                </div>
                <p>En el dinámico mundo empresarial actual, la clave del éxito reside en contar con un equipo de profesionales talentosos y comprometidos. En Nowork, entendemos que la elección del personal adecuado es un factor determinante para el crecimiento
                    y la prosperidad de cualquier organización.</p>
                <div class="animacion-text">
                    @auth
                        @if (auth()->user()->role_id == 1)
                            <h3 style="width: 650px;">Usuario administrador</h3>
                        @elseif (auth()->user()->role_id == 2)
                            <h3 style="width: 650px;">Usuario instructor</h3>
                        @elseif (isset($user) && auth()->user()->role_id == 3)
                            <h3 style="width: 650px;">Usuario reclutador</h3>
                        @elseif (isset($user) && auth()->user()->role_id == 4)
                            <h3 style="width: 650px;">Usuario candidato</h3>
                        @endif
                    @endauth
                    @guest
                        <h3 style="width: 650px;">Usuario invitado</h3>
                    @endguest
                </div>
            </div>
        </section>
    </main>

@endsection
