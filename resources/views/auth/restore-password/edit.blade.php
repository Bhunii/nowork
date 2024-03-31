@extends('layouts.app',['title' => 'Restore Password'])
@section('css')
<link rel="stylesheet" href="{{ asset('css/restore-password.css') }}">
@endsection
@section('content')
<main class="contenido">
    <div class="container-restore">
        <section class="name-restore">
            <span class="name">Restuarar Contraseña</span>
        </section>
        <section class="container-form-restore">
            <form class="form form-restore" action="{{ route('restore-password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div>
                    <label for="email_address" >Email</label>
                    <input
                    type="text"
                    id="email_address"
                    class="form-control"
                    name="email"
                    required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div>
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                    <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    required autofocus>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div>
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>
                    <input
                    type="password"
                    id="password-confirm"
                    class="form-control"
                    name="password_confirmation"
                    required autofocus>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                <div style="align-items: center;">
                    <input
                    class="input-restore"
                    type="submit"
                    value="Cambiar Contraseña"
                    >
                </div>
            </form>
        </section>
    </div>
</main>
@endsection
