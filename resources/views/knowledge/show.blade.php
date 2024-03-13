@extends('layouts.nav.recruiter',['title' => 'The Knowledge'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show-occupation.css') }}">
@endsection

@section('content_profile')
<div class="container_index_occupation">
    <div class="content_title_occupation">
        <h3>Conocimientos</h3>
    </div>
    <div class="container_general_occupation">
        <div class="container_content_occupation">
            <div class="container_header_general">
                <ul class="ul_header_general">
                    <li style="width: 14%">Code Occupation</li>
                    <li style="width: 14%">Code Knoledge</li>
                    <li style="width: 20%">Name</li>
                    <li style="width: 50%">Description</li>
                </ul>
            </div>
            <div class="container_data_general">
            @if ($knowledges->isEmpty())
                <span>table empty</span>
            @else
                @foreach($knowledges as $knowledge)
                <ul class="ul_data_general">
                    <li style="width: 14%">{{$code}}</li>
                    <li style="width: 14%">{{$knowledge->code}}</li>
                    <li style="width: 20%">{{$knowledge->name}}</li>
                    <li style="width: 50%">{{$knowledge->description}}</li>
                </ul>
                @endforeach
            @endif
            </div>
            <div class="container_add">
                <a class="add-icon" href="{{ route('functions.create', $code) }}">
                    <img src="{{ asset('img/show-and-more-icon.png') }}" alt="agregar">
                </a>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('occupation.show', $code) }}">Volver</a>
    </div>
</div>
@endsection
