@extends('layouts.app')

@section('content')
<a href="{{ route('vacancy.create') }}" id="create">Create new vacancy</a>
<ul>
    @forelse($vacancies as $vacancy)
        <li>
            <a href="#">
                {{ $vacancy->id_vacancy }}
            </a>
        </li>
    @empty
        <p>No hay sistema</p>
    @endforelse
</ul>
@endsection

<style>
#create {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    margin-bottom: 20px;
}

#create:hover {
    background-color: #2980b9;
}

/* Estilos para la lista de ciudades */
.roles-list {
    list-style: none;
    padding: 0;
}

.roles-list li {
    margin-bottom: 10px;
}

.ciudad-link {
    text-decoration: none;
    color: #333;
    border: 1px solid #ccc;
    padding: 10px 15px;
    border-radius: 4px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.ciudad-link:hover {
    background-color: #f5f5f5;
}
</style>