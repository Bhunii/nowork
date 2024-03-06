@extends('layouts.nav.recruiter',['title' => 'Your Profile'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show-occupation.css') }}">
@endsection

@section('content_profile')
<div class="container_index_occupation">
    <div class="content_title_occupation">
        <h3>Ocupacion</h3>
    </div>
    <div class="container_general_occupation">
        <div class="container_content_occupation">
            <div class="container_header_general">
                <ul class="ul_header_general">
                    <li style="width: 15%">Code</li>
                    <li style="width: 25%">Name</li>
                    <li style="width: 60%">Description</li>
                </ul>
            </div>
            <div class="container_data_general">
                <ul class="ul_data_general">
                    <li style="width: 15%">{{$occupation->code_occupation}}</li>
                    <li style="width: 25%">{{$occupation->name}}</li>
                    <li style="width: 60%">{{$occupation->description}}</li>
                </ul>
            </div>
            <div class="title_oc">
                <h4>Funciones</h4>
            </div>
            <div class="container_header_general">
                <ul class="ul_header_general">
                    <li style="width: 25%">Code Function</li>
                    <li style="width: 75%">Description</li>
                </ul>
            </div>
            <div class="container_data_general">
            @if ($functions->isEmpty())
                <span>table empty</span>
            @else
                @foreach($functions as $function)
                <ul class="ul_data_general">
                    <li style="width: 25%">{{$function->code}}</li>
                    <li style="width: 75%">{{$function->description}}</li>
                </ul>
                @endforeach
            @endif
            </div>
            <div class="container_add">
                <a class="add-icon" href="#">
                    <img src="{{ asset('img/show-and-more-icon.png') }}" alt="agregar">
                </a>
            </div>
        </div>
    </div>
    <div>
        <a href="{{route('occupation.index')}}" id="create">Volver</a>
    </div>
</div>

@endsection
