@extends('layouts.app' , ['title' => 'About us'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/diskette.css') }}">
@endsection

@section('style')
    <style>
        .card-bg{
            height: 100%;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
        /* .bg-red {
            background-image: url('{{ asset('img/perfil.jpg') }}');
        } */

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

    <div class="diskette" id="brayan">
        <div class="border-diskette" id="diskette-section-1">
            <ul id="top-container-border-diskette">
                <ul style="align-items:flex-start;">
                    <li id="li-half-circle-left"></li>
                </ul>
                <ul style="justify-content: center;">
                    <li id="li-circle-left"></li>
                </ul>
            </ul>
            <ul id="bottom-container-border-diskette">
                <li></li>
            </ul>
        </div>
        <div class="center-diskette" id="diskette-section-2">
            <div id="center-diskette-section-1">
                <ul>
                    <li id="li-top-center-left">
                        <div></div>
                    </li>
                    <li id="li-top-center-top"></li>
                    <li id="li-top-center-right">
                        <hr>
                    </li>
                </ul>
            </div>
            <div id="center-diskette-section-2" >
                <div id="div-center-1">
                    <ul>
                        <li id="li-circle-center"></li>
                        <li id="li-square-center"></li>
                    </ul>
                </div>
                <div id="div-center-2">
                    <span>Stiben Yara</span>
                    <hr>
                </div>
            </div>
            <div id="center-diskette-section-3"></div>
        </div>
        <div class="border-diskette" id="diskette-section-3">
            <ul id="top-container-border-diskette">
                <ul style="justify-content: end;">
                    <li id="li-half-circle-right"></li>
                </ul>
                <ul style="justify-content: center;">
                    <li id="li-circle-right"></li>
                </ul>
            </ul>
            <ul id="bottom-container-border-diskette">
                <li></li>
            </ul>
        </div>
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
