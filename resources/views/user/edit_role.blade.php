@auth
    @php
        $profileView = null;
    @endphp
    @if (auth()->user()->role_id == 1)
        @php
            $profileView = 'user.edit_role.administrator';
        @endphp
    @elseif (auth()->user()->role_id == 2)
        @php
            $profileView = 'user.edit_role.instructor';
        @endphp
    @endif
    @if ($profileView)
        @include($profileView)
    @endif
 @endauth
