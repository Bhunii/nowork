@extends('layouts.app',['title' => 'Form Register'])

@section('js')
    <script src="{{ asset('js/location.js') }}"></script>
@endsection

@section('style')
    <style>
        .contenido_form{
            height: 1225px;
        }

        .form_register_candidate{
            display: flex;
            flex-direction: column;
            border: 2px #e3e3e3 solid;
            border-radius: 15px;
            gap: 25px;
            background: #f1f1f1;
        }
        .div_form_create_candidate{
            display: flex;
            width: auto;
            height: auto;
            padding: 5px 21px;
            gap: 21px;
        }
        .input_general_submit{
            width: 155px;
            height: 40px;
        }

        .input_style_general, .select_style_general{
            height: 36px;
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
            <select class="select_style_general" name="id_departament" id="departamentSelect">
                <option value="">Select an option</option>
                @foreach ($departaments as $departament)
                    <option value="{{ $departament->id }}" data-municipalities='@json($departament->municipalities)'>{{ $departament->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Municipality</label>
            <select class="select_style_general" name="id_municipality" id="municipalitySelect">
                <option value="">Select an option</option>
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
