@if($curriculum && ($curriculum->studies->isNotEmpty() || $curriculum->experiences->isNotEmpty() || $curriculum->languages->isNotEmpty()))
    @extends('curriculum.create')
@else
    <p>extends de edit</p>
@endif
