
    @auth
        <!-- <p>Bienvenido {{ auth()->user()->name }}</p>
        <p>-Email: {{ auth()->user()->email }}</p>
        <p>-User Name: {{ auth()->user()->user_name }}</p> -->

        @if (auth()->user()->role_id == 1)
            <!--  -->
        @elseif (auth()->user()->role_id == 2)
            <!-- <p>Rol: Instructor</p> -->
        @elseif (auth()->user()->role_id == 3)
            <!-- <p>Rol: Reclutador</p> -->
        @elseif (isset($user) && auth()->user()->role_id == 4)

            @extends('profiles.candidate')
            <!-- <span><a href="{{ route('profile.index', $user->id) }}">Actualizar Datos Basicos</a></span> -->
        @endif
            <!-- nada -->
    @endauth

