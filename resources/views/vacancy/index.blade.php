@extends('layouts.app')

@section('content')
    <h1>Lista Vacantes</h1>

    <div class="vacancy-list">
        @forelse($vacancies as $vacancy)
            <div class="vacancy-box">
                <span class="company-name">{{$vacancy->company_name}}</span>
                <table class="tabla">
                    <thead>
                        <tr>
                            <th style="background-color: #333; color: #fff;">Perfil</th>
                            <th style="background-color: #333; color: #fff;">Numero vacantes disponibles</th>
                            <th style="background-color: #333; color: #fff;">Dias de trabajo</th>
                            <th style="background-color: #333; color: #fff;">Direccion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$vacancy->occupational_profile}}</td>
                            <td>{{$vacancy->number_vacancy}}</td>
                            <td>{{$vacancy->workday}}</td>
                            <td>{{$vacancy->addres}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @empty
            <p>No hay sistema</p>
        @endforelse
    </div>

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

    .vacancy-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-around;
    }

    .vacancy-box {
        border: 1px solid #ddd;
        padding: 10px;
        width: 300px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .company-name {
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
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