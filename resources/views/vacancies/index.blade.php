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
                    <div class="contenedor_vacante">
                        @forelse($vacancies as $vacancy)
                            <div class="datos_vacante">
                                <ul>
                                    <li>Nombre empresa</li>
                                    <li>Razon social</li>
                                </ul>
                                <ul>
                                    <li>Cargo</li>
                                    <li>Denominacion</li>
                                    <li>funciones</li>
                                    <li>departamento - municipio</li>
                                    <li>Perfil ocupacional</li>
                                </ul>
                            </div>
                            <div class="datos_vacante datos_vacante_style">
                                <ul class="ul_fecha_vacante">
                                    <li>Fecha inicio</li>
                                    <li>Fecha fin</li>
                                </ul>
                                <ul class="ul_postular_vacante">
                                    @auth
                                        @if(auth()->user()->role_id == '4')
                                            <li>
                                                <form>
                                                    <input
                                                    type="submit"
                                                    value="Postularse">
                                                </form>
                                            </li>
                                        @elseif(auth()->user()->role_id == '1')
                                            <li>
                                                <button>Postularse</button>
                                            </li>
                                        @elseif(auth()->user()->role_id == '2')
                                            <li>
                                                <button>Postularse</button>
                                            </li>
                                        @elseif(auth()->user()->role_id == '3')
                                            <li>
                                                <button>Postularse</button>
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
                        @empty
                            <span>No hay vacantes registradas</span>
                        @endforelse
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
@endsection
