@extends('layouts.nav.recruiter',['title' => 'Reclutador - Aplicaciones'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general-index.css') }}">
@endsection

@section('style')
    <style>
        .container_general_profile{
            font-size: 15px;
        }
    </style>
@endsection

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Ponderaciones</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Puntuación de Educación</th>
                                    <th scope="col">Puntuación de Experiencias</th>
                                    <th scope="col">Puntuación de Idiomas</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ponderates as $ponderate)
                                    <tr>
                                        <th scope="row">{{ $ponderate->id }}</th>
                                        <td>{{ $ponderate->puntuacion_educacion }}</td>
                                        <td>{{ $ponderate->puntuacion_experiencias }}</td>
                                        <td>{{ $ponderate->puntuacion_idiomas }}</td>
                                        <td>
                                            <a href="{{ route('ponderate.edit', $ponderate->id) }}" class="btn btn-primary">Editar</a>
                                            <form action="{{ route('ponderate.destroy', $ponderate->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta ponderación?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9">Table empty</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
