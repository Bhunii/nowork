@auth
    @if (auth()->user()->role_id == 1)
        <!--  -->
    @elseif (auth()->user()->role_id == 2)
        <!-- <p>Rol: Instructor</p> -->
    @elseif (auth()->user()->role_id == 3)
        <!-- <p>Rol: Reclutador</p> -->
    @elseif (isset($user) && auth()->user()->role_id == 4)
        @extends('profiles.candidate')
    @endif
 @endauth

