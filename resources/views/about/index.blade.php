@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>About</title>
<style>
    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 30px; 
    }

    .section {
      margin-bottom: 40px;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .section h3 {
      margin-bottom: 10px;
      color: #333;
      font-size: 24px;
    }

    .section p {
      color: #666;
      font-size: 16px;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 30px;
    }

    .card {
    width: 250px;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    }

    .card:hover {
    transform: translateY(-5px);
    }

    .card a {
    width: 250px;
    height: 200px;
    text-decoration: none;
    color: black;
    display: block;
    }

    #isaac {
        background-color: rgb(189, 187, 187)
    }

    #brayan {
        background-color: rgb(192, 46, 46)
    }

    #juan {
        background-color: rgb(214, 210, 210)
    }

    #nicolas {
        background-color: rgb(180, 57, 57)
    }
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
</head>
<body>
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
</body>
</html>
@endsection