@extends('layouts.app' , ['title' => 'About us'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('style')
    <style>
        .card-bg {
            height: 100%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
        .bg-red {
            background-image: url('{{ asset('img/perfil.jpg') }}');
        }

        .bg-white {
            background-image: url('{{ asset('img/perfil.jpg') }}');
        }

        .bg-gray {
            background-image: url('{{ asset('img/perfil.jpg') }}');
        }

        .bg-black {
            background-image: url('{{ asset('img/perfil.jpg') }}');
        }
    </style>
@endsection

@section('content')
<main class="contenedor_about">
    <div class="section">
        <h3>Historia</h3>
        <p>Aqui va la historia des estos cuatro :D</p>
      </div>

      <div class="section">
        <h3>Misión</h3>
        <p>Aqui va la mision de el proyecto</p>
      </div>

      <div class="section">
        <h3>Visión</h3>
        <p>Nuestra vision se encuentra aqui...</p>
      </div>

  <div class="container">
    <div class="card" id="isaac">
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <div class="card-bg bg-red"></div>
      </a>
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <h2>Isaac Revelo Manrique</h2>
      </a>
    </div>

    <div class="card" id="brayan">
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <div class="card-bg bg-white"></div>
      </a>
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <h2>Brayan Stiben Capera Yara</h2>
      </a>
    </div>

    <div class="card" id="juan">
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <div class="card-bg bg-gray"></div>
      </a>
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <h2>Juan Felipe Salgado Varela</h2>
      </a>
    </div>

    <div class="card" id="nicolas">
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <div class="card-bg bg-black"></div>
      </a>
      <a href="https://github.com/byStiben/nowork.git" target="_blank">
        <h2>Juan Nicolas Barreto Martinez</h2>
      </a>
    </div>
  </div>
</main>
</html>
@endsection
