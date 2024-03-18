@extends('layouts.app',['title' => 'Vacancies'])

@section('css')
<link rel="stylesheet" href="{{ asset('css/vacancies.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/search.js') }}">
        let departamentos = @json($departamentsJson);
    </script>
@endsection

@section('content')
    <main class="contenedor_index_vacantes">
        <section class="section_vacantes">
            <article class="article_buscador_vacantes">
                <div class="contenedor_buscador">
                    <input
                    class="input_style_general buscar-input-vacante"
                    id="buscarVacante"
                    type="text"
                    placeholder="Buscar"
                    >
                    <button id="btnBuscarVacante" class="buscar-button-vacante">
                        <picture>
                            <img src="{{ asset('img/search-icon.png') }}" alt="icono buscador">
                        </picture>
                    </button>
                </div>
            </article>
            <article class="article_general_vacantes">
                <div class="contenedor_vacantes">
                    <div class="titulo_vacantes">
                        <h2>Listado de Vacantes</h2>
                    </div>
                    @forelse($vacancies as $vacancy)
                    @php
                        $denonimation = $vacancy->charge->denomination->description ?? null;
                    @endphp
                        <div class="contenedor_vacante" data-departamento="{{ $vacancy->departament->name }}">
                            <div class="datos_vacante">
                                <ul>
                                    <li style="font-weight: 700;">{{ $vacancy->company->name }}</li>
                                    <li>{{ $vacancy->company->nature}}</li>
                                </ul>
                                <ul>
                                    <li style="font-weight: 500;">Cargo</li>
                                    <li>
                                        <span>{{ $denonimation ?? '' }}</span> -
                                        <span>{{ $vacancy->charge->functions }}</span>
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
                                    @switch(auth()->user()->role_id)
                                        @case('4')
                                            @if ($vacancy->processes()->where('id_candidate', auth()->user()->candidate->id)->exists())
                                                <li>Ya esta postulado</li>
                                            @else
                                                <li>
                                                    <form method="POST" action="{{ route('process.store', $vacancy->id) }}">
                                                        @csrf
                                                        <input type="submit" value="Postularse">
                                                    </form>
                                                </li>
                                            @endif
                                            @break
                                        @case('1')
                                        @case('2')
                                        @case('3')
                                            <li>No puede postularse</li>
                                            @break
                                    @endswitch
                                @endauth
                                @guest
                                    <li>Inicia sesión</li>
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
