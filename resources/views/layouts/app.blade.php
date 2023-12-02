<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>
        @isset($title)
            {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    <style>

    </style>
    <title></title>
</head>
<body>
    <header class="encabezado">
        <section class="logo_encabezado">
            <span>Nowork</span>
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
                    <a href="#" target="_self">...</a>
                </li>
                <li class="links">
                    <a href="#" target="_self">...</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

</body>
</html>
