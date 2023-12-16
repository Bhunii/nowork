@extends('layouts.app',['title' => 'Vacancies'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vacancies.css') }}">
@endsection

@section('style')
    <style>

    </style>
@endsection


@section('content')
    <main class="contenedor_index_vacantes">
        <section class="section_vacantes">
            <article class="article_buscador_vacantes">
                <div class="contenedor_buscador">
                    <input
                    class="input_style_general"
                    placeholder="Buscador">
                </div>
            </article>
            <article class="article_general_vacantes">
                <div class="contenedor_vacantes">
                    <div class="titulo_vacantes">
                        <h2>Listado de Vacantes</h2>
                    </div>
                    @forelse($vacancies as $vacancy)
                        <div class="contenedor_vacante">
                            <div class="datos_vacante">
                                <ul>
                                    <li style="font-weight: 700;">{{ $vacancy->company->name }}</li>
                                    <li>{{ $vacancy->company->nature}}</li>
                                </ul>
                                <ul>
                                    <li style="font-weight: 500;">Cargo</li>
                                    <li>
                                        <span>{{ $vacancy->charge->denomination->description }}</span> -
                                        <span>{{ $vacancy->charge->function->description }}</span>
                                    </li>
                                    <li>
                                        <span>{{ $vacancy->departament->name }}</span> -
                                        <span>{{ $vacancy->municipality->name }}</span></li>
                                    <li>{{ $vacancy->occupational_profile }}</li>
                                </ul>
                            </div>
                            <div class="datos_vacante datos_vacante_style">
                                <ul class="ul_fecha_vacante">
                                    <li>{{ $vacancy->start_date }}</li>
                                    <li>{{ $vacancy->end_date }}</li>
                                </ul>
                                <ul class="ul_postular_vacante">
                                    @auth
                                        @if(auth()->user()->role_id == '4')
                                            @if ($vacancy->processes()->where('id_candidate', auth()->id())->exists())
                                                <li>
                                                    Ya está postulado
                                                </li>
                                            @else
                                                <li>
                                                    <form method="POST" action="{{ route('process.store', $vacancy->id) }}">
                                                        @csrf
                                                        <input type="submit" value="Postularse">
                                                    </form>
                                                </li>
                                            @endif
                                        @elseif(auth()->user()->role_id == '1')
                                            <li>
                                                No puede postularse
                                            </li>
                                        @elseif(auth()->user()->role_id == '2')
                                            <li>
                                                No puede postularse
                                            </li>
                                        @elseif(auth()->user()->role_id == '3')
                                            <li>
                                                No puede postularse
                                            </li>
                                        @endif
                                    @endauth
                                    @guest
                                        <li>
                                            <button>Postularse</button>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    @empty
                        <span>No hay vacantes registradas</span>
                    @endforelse
                    </div>
                </div>
            </article>
        </section>
    </main>
@endsection
