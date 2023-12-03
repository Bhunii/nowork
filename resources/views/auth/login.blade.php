@extends('layouts.app',['title' => 'Login'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<main class="contenido">
    <div class="container_login">
        <section class="name_login">
            <span class="name">Sign in Nowork</span>
        </section>
        <!-- <section class="img_background_login">
            <img src="../img/login/select_candidates_illustrations.jpg"/>
        </section> -->
        <section class="container_form_login">
            <form class="form form_login" action="{{ route('login') }}" method="POST" novalidate>
                @csrf

                @if (session('mensaje'))
                    <small>{{ session('mensaje') }}</small>
                @endif
                <div>
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
                    value="">
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
            </form>
        </section>
        <section class="separator">
            <hr>
            <span> --- or --- </span>
            <hr>
        </section>
        <section class="container_register">
            <ul class="sign_up">
                <li>New user?</li>
                <li>  |  </li>
                <li><a href="{{ route('user.create') }}" target="_self"> Create an account</a></li>
            </ul>
        </section>
    </div>
</main>

@endsection
