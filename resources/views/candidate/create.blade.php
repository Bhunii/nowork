@extends('layouts.app',['title' => 'Form Register'])

@section('content')
    <style>
        .contenido{
            height: 1000px;
        }

        .form_register_candidate{
            height: 90%;
            gap: 10px;
        }

        .form_register_candidate div{
            height: 10%;
        }

    </style>
<main class="contenido">
    <form class="form form_register_candidate" method="post" action="{{ route('candidate.store') }}">
        @csrf
        <div>
            <label>Document Type</label>
            <select name="doc_type">
                <option value=" ">Select an option</option>
                <option value="CC">citizenship card</option>
                <option value="TI">identity card</option>
            </select>
        </div>
        <div>
            <label>Document Number</label>
            <input
            name="doc_num"
            type="text"
            value="{{ old('doc_num') }}"
            >@error('doc_num')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Name</label>
            <input
            name="name"
            type="text"
            value="{{ old('name') }}"
            >@error('name')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Last Name</label>
            <input
            name="last_name"
            type="text"
            value="{{ old('last_name') }}"
            >@error('last_name')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Phone</label>
            <input
            name="phone"
            type="text"
            value="{{ old('phone') }}"
            >@error('phone')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>User name</label>
            <input
            name="user_name"
            type="text"
            value="{{ old('user_name') }}"
            >@error('user_name')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Email</label>
            <input
            name="email"
            type="text"
            value="{{ old('email') }}"
            >@error('email')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Genre</label>
            <select name="genre">
                <option value=" ">Select an option</option>
                <option value="M">male</option>
                <option value="F">female</option>
            </select>
        </div>
        <div>
            <label>Departament</label>
            <select name="id_departament">
                <option value=" ">Select an option</option>
                @foreach ($departaments as $departament)
                    <option value="{{ $departament->id }}">{{ $departament->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Municipality</label>
            <select name="id_municipality">
                <option value=" ">Select an option</option>
                @foreach ($municipalities as $municipality)
                    @if (old('id_departament') == $municipality->id_departament)
                        <option value="{{ $municipality->id }}" selected>{{ $municipality->name }}</option>
                    @else
                        <option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div>
            <label>Addres</label>
            <input
            name="addres"
            type="text"
            value=""
            >
        </div>
        <div>
            <label>Password</label>
            <input
            name="password"
            type="password"
            value=""
            >@error('password')
                <small>{{$message}}</small>
            @enderror
        </div>
        <input
        type="submit"
        value="enviar"
        >
    </form>
    <h4><a href="{{ route('login') }}">Volver</a></h4>
</main>

@endsection
