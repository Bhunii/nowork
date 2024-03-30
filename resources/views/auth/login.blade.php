@extends('layouts.app',['title' => 'Login'])

@section('js')
    <script src="{{ asset('js/hide-show-pass.js') }}"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('style')
    <style>
        .contenido{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px
        }
    </style>
@endsection

@section('content')
<main class="contenido">
    <div class="container_login">
        <section class="name_login">
            <span class="name">Sign in Nowork</span>
        </section>
        <section class="container_form_login">
            <form class="form form_login" action="{{ route('login') }}" method="POST" novalidate>
                @csrf

                @if (session('mensaje'))
                    <small>{{ session('mensaje') }}</small>
                @endif
                <div style="margin-bottom: 15px;">
                    <label>Email address</label>
                    <input
                    name="email"
                    type="text"
                    value="{{ old('email')}}"
                    >
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <label>Password</label>
                    <input
                    type="password"
                    name="password"
                    value=""
                    id="pass"
                    >
                    <i class='bx bx-show-alt' ></i>
                    @error('password')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    <input
                    class="input_login"
                    type="submit"
                    name="login"
                    value="Sign in">
                </div>
                <div class="restore-password">
                    <ul class="sign_up">
                        <li>Forgot Password?</li>
                        <li>  |  </li>
                        <li><a href="{{ asset('login') }}" target="_self"> Restore Password</a></li>
                    </ul>
                </div>
            </form>
        </section>
        <section class="separator">
            <hr>
            <span> or </span>
            <hr>
        </section>
        <section class="container_register">
            <ul class="sign_up">
                <li>New user?</li>
                <li>  |  </li>
                <li><a href="{{ route('candidate.create') }}" target="_self"> Create an account</a></li>
            </ul>
        </section>
    </div>
</main>

@endsection
