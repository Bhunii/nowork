@extends('layouts.app')

@section('content')
    <div class="search-bar">
        <!-- Barra de búsqueda -->
        <input type="text" placeholder="Buscar...">
    </div>

    <h1>Lista Vacantes</h1>

    <div class="filters">
        <!-- Filtros: nombre de la empresa, fecha inicio, fecha fin, razon social, etc. -->
        <label for="company_name">Nombre Empresa:</label>
        <input type="text" id="company_name">

        <label for="start_date">Fecha de Inicio:</label>
        <input type="date" id="start_date">

        <label for="end_date">Fecha de Fin:</label>
        <input type="date" id="end_date">

        <label for="business_name">Razon Social:</label>
        <input type="text" id="business_name">
    </div>

    <table class="tabla">
        <thead>
            <tr>
                <th style="background-color: #333; color: #fff;">Perfil</th>
                <th style="background-color: #333; color: #fff;">Numero vacantes disponibles</th>
                <th style="background-color: #333; color: #fff;">Dias de trabajo</th>
                <th style="background-color: #333; color: #fff;">Direccion</th>
            </tr>
        </thead>
        @forelse($vacancies as $vacancy)
            <tbody>
                <tr>
                    <td>{{$vacancy->occupational_profile}}</td>
                    <td>{{$vacancy->number_vacancy}}</td>
                    <td>{{$vacancy->workday}}</td>
                    <td>{{$vacancy->addres}}</td>
                </tr>
            </tbody>
        @empty
            <p>No hay sistema</p>
        @endforelse
    </table>

    <div class="bottom-section">
        <!-- Botón al fondo -->
        <a href="{{ route('vacancy.create') }}" id="create" style="background-color: #e44d26; color: #fff; padding: 10px; text-decoration: none;">Crear nueva vacante</a>
    </div>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f2f2f2;
        color: #333;
    }

    .search-bar {
        margin-bottom: 20px;
    }

    .filters {
        margin-bottom: 20px;
    }

    .filters label,
    .filters input,
    .filters select {
        display: block;
        margin-bottom: 8px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    .tabla {
        width: 100%;
        border-collapse: collapse;
    }

    .tabla th, .tabla td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .bottom-section {
        text-align: center;
        margin-top: 20px;
    }
</style>