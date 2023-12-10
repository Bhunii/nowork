@auth
    @php
        $profileView = null;
    @endphp
    @if($curriculum && ($curriculum->studies->isNotEmpty() || $curriculum->experiences->isNotEmpty() || $curriculum->languages->isNotEmpty()))
        @php
            $profileView ='curriculum.create';
        @endphp
    @else
        @php
            $profileView ='curriculum.edit';
        @endphp
    @endif
    @if ($profileView)
        @include($profileView)
    @endif
@endauth
