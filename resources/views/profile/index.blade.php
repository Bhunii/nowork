@auth
    @php
        $profileView = null;
    @endphp
    @if (auth()->user()->role_id == 1)
        @php
            $profileView = 'profiles.administrator';
        @endphp
    @elseif (auth()->user()->role_id == 2)
        <!-- <p>Rol: Instructor</p> -->
    @elseif (auth()->user()->role_id == 3)
        <!-- <p>Rol: Reclutador</p> -->
    @elseif (auth()->user()->role_id == 4)
        @php
            $profileView = 'profiles.candidate';
        @endphp
    @endif
    @if ($profileView)
        @include($profileView)
    @endif
 @endauth

