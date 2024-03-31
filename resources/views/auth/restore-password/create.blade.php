@extends('layouts.app',['title' => 'Form Restore Password'])
@section('css')
<link rel="stylesheet" href="{{ asset('css/restore-password.css') }}">
@endsection
@section('content')
<main class="contenido">
    <div class="container-restore">
        <section class="name-restore">
            <span class="name">Recuperar Contraseña</span>
        </section>
        <section class="container-form-restore">
            <form class="form form-restore" action="{{ route('restore-password.store') }}" method="POST">
                @csrf
                <div>
                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Tu Email</label>
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
                <div style="align-items: center;">
                    <input
                    class="input-restore"
                    type="submit"
                    value="Enviar Email de Recuperación"
                    >
                </div>
            </form>
        </section>
    </div>
</main>
@endsection
