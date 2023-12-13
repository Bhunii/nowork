@auth
    @php
        $profileView = null;
    @endphp
    @if (auth()->user()->role_id == 3)
        @php
            $profileView = 'process.index.recruiter';
        @endphp
    @elseif (auth()->user()->role_id == 4)
        @php
            $profileView = 'process.index.candidate';
        @endphp
    @endif
    @if ($profileView)
        @include($profileView)
    @endif
@endauth
