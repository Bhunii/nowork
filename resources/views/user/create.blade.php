@extends('layouts.app',['title' => 'Form Register'])

@section('content')
    <style>
        .contenido{
            height: 1000px;
        }

        .form_register_user{
            height: 75%;
        }

        .form_register_user div{
            height: 10%;
            gap: 15%;
        }

    </style>
<main class="contenido">
    <form class="form form_register_user" method="post" action="{{ route('user.store') }}">
        @csrf
        <div>
            <label>Document Type</label>
            <select name="doc_type">
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
            <label>Password</label>
            <input
            name="password"
            type="password"
            value="{{ old('password') }}"
            >@error('password')
                <small>{{$message}}</small>
            @enderror
        </div>
        <input
        type="submit"
        value="Enviar"
        >
    </form>
    <h4><a href="{{ route('login') }}">Volver atras</a></h4>
</main>

@endsection
