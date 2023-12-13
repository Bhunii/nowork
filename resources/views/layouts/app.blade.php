<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('js')
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/icon-black-logo.png') }}">
    @yield('css')
    <title>
        @isset($title)
            {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    @yield('style')
    <style>
        /* link[rel="icon"] {
            width: 5px;
            height: 11px;
        } */

        /* main{
            padding: 1.5% 9%;
        } */
    </style>
</head>
<body>
    <header class="encabezado">
        <section class="logo_encabezado">
            <img class="icon_logo" src="{{ asset('img/icon-white-logo.png') }}" alt="icon profile">
            <span>nowork</span>
        </section>

        <nav class="navbar_encabezado">
            <ul class="nav_links">
                <li class="links">
                    <a href="{{ route('home.index') }}" target="_self">Home</a>
                </li>
                <li class="links">
                    <a href="#" target="_self">...</a>
                </li>
                <li class="links">
                    <a href="{{ route('about.index') }}" target="_self" class="button">Vacancies</a>
                </li>
                <li class="links">
                    <a href="{{ route('about.index') }}" target="_self" class="button">About us</a>
                </li>
            </ul>
        </nav>
        <section class="nexos_header">
            @auth
                <ul class="ul_nexos_header">
                    <li class="li_nexos">
                        <a href="{{ route('profile.index')}}">Profile</a>
                    </li>
                </ul>
            @endauth
            @guest
                <ul class="ul_nexos_header">
                    <li class="li_nexos">
                        <a href="{{ route('login') }}">Iniciar Sesion</a>
                    </li>
                    <li class="li_nexos">
                        <a href="{{ route('candidate.create') }}">Registrarse</a>
                    </li>
                </ul>
            @endguest
        </section>
    </header>

    @yield('content')

    <footer class="pie_pagina">
        <section class="p_footer">
            <h3>¡Hola mundo!</h3>
            <span>AplicacionWeb de Proyecto</span>
            <p>Bienvenido a <span>nowork</span>. Esta interfaz grafica diseñada. Para usarla o no usarla, ¡con proposito practico!
                ©2023 Nuestro Sitio Web. Todos los derechos reservados.
            </p>
        </section>
        <section class="links_footer">
            <ul class="ul_links">
                <li class="linksf">
                    <a href="#" target="">
                        <img src="../img/login/icon_facebook_circular.png" alt="facebook"/>
                    </a>
                </li>
                <li class="linksf">
                    <a href="#" target="">
                        <img src="../img/login/icon_whatsapp.png" alt="whatsapp"/>
                    </a>
                </li>
                <li class="linksf">
                    <a href="#" target="">
                        <img src="../img/login/icon_social.png" alt="social"/>
                    </a>
                </li>
            </ul>
        </section>

        <section class="add_footer">
            <picture>
                <a href="" target=""><img src="../img/login/icon_help.png" alt="ayuda"/></a>
            </picture>
        </section>
    </footer>
</body>
</html>
