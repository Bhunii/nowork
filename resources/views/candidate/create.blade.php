@extends('layouts.app',['title' => 'Form Register'])

@section('style')
    <style>
        .contenido_form{
            height: 1050px;
        }

        .form_register_candidate{
            display: flex;
            flex-direction: column;
        }
        .div_form_create_candidate{
            padding: 20px;
            gap: 19px;
        }
        .input_general_submit{
            width: 140px;
            height: 40px;
        }
        .btn_general{
            width: 140px;
            height: 40px;
        }

    </style>
@endsection
@section('content')
<main class="contenido_form">
    <form class="form form_register_candidate" method="post" action="{{ route('candidate.store') }}">
        @csrf
        <div>
            <label>Document Type</label>
            <select class="select_style_general" name="doc_type" class="s">
                <option value=" ">Select an option</option>
                <option value="CC">citizenship card</option>
                <option value="TI">identity card</option>
            </select>
        </div>
        <div>
            <label>Document Number</label>
            <input
            class="input_style_general"
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
            class="input_style_general"
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
            class="input_style_general"
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
            class="input_style_general"
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
            class="input_style_general"
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
            class="input_style_general"
            name="email"
            type="text"
            value="{{ old('email') }}"
            >@error('email')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Genre</label>
            <select class="select_style_general" name="genre">
                <option value=" ">Select an option</option>
                <option value="M">male</option>
                <option value="F">female</option>
            </select>
        </div>
        <div>
            <label>Departament</label>
            <select class="select_style_general" name="id_departament">
                <option value=" ">Select an option</option>
                @foreach ($departaments as $departament)
                    <option value="{{ $departament->id }}">{{ $departament->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Municipality</label>
            <select class="select_style_general" name="id_municipality">
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
            class="input_style_general"
            name="addres"
            type="text"
            value="{{ old('addres') }}"
            >
            @error('addres')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div>
            <label>Password</label>
            <input
            class="input_style_general"
            name="password"
            type="password"
            value=""
            >
            @error('password')
                <small>{{$message}}</small>
            @enderror
        </div>
        <div class="div_form_create_candidate" style="flex-direction: row">
            <input
            class="input_general_submit"
            type="submit"
            value="Crear"
            >
            <button class="btn_general"><a href="{{ route('login') }}">Volver</a></button>
        </div>
    </form>
</main>

@endsection
