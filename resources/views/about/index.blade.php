@extends('layouts.app' , ['title' => 'About us'])

@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/diskette.css') }}">
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

    <article style="display:flex; width: 100%; flex-direction: row;align-items:center; justify-content:space-between; padding: 10px 15px;">
        <div class="diskette" id="isaac">
            <div class="border-diskette" id="diskette-section-1">
                <ul class="top-container-border-diskette">
                    <ul style="align-items:flex-start;">
                        <li class="li-half-circle-left"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-left"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
            <div class="center-diskette" id="diskette-section-2">
                <div class="center-diskette-section-1">
                    <ul>
                        <li class="li-top-center-left">
                            <div></div>
                        </li>
                        <li class="li-top-center-top"></li>
                        <li class="li-top-center-right">
                            <hr>
                        </li>
                    </ul>
                </div>
                <div class="center-diskette-section-2" >
                    <div class="div-center-1">
                        <ul>
                            <li class="li-circle-center"></li>
                            <li class="li-square-center"></li>
                        </ul>
                    </div>
                    <div class="div-center-2">
                        <span>Isaac Revelo</span>
                        <hr>
                    </div>
                </div>
                <div class="center-diskette-section-3"></div>
            </div>
            <div class="border-diskette" id="diskette-section-3">
                <ul class="top-container-border-diskette">
                    <ul style="justify-content: end;">
                        <li class="li-half-circle-right"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-right"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="diskette" id="brayan">
            <div class="border-diskette" id="diskette-section-1">
                <ul class="top-container-border-diskette">
                    <ul style="align-items:flex-start;">
                        <li class="li-half-circle-left"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-left"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
            <div class="center-diskette" id="diskette-section-2">
                <div class="center-diskette-section-1">
                    <ul>
                        <li class="li-top-center-left">
                            <div></div>
                        </li>
                        <li class="li-top-center-top"></li>
                        <li class="li-top-center-right">
                            <hr>
                        </li>
                    </ul>
                </div>
                <div class="center-diskette-section-2" >
                    <div class="div-center-1">
                        <ul>
                            <li class="li-circle-center"></li>
                            <li class="li-square-center"></li>
                        </ul>
                    </div>
                    <div class="div-center-2">
                        <span>Stiben Yara</span>
                        <hr>
                    </div>
                </div>
                <div class="center-diskette-section-3"></div>
            </div>
            <div class="border-diskette" id="diskette-section-3">
                <ul class="top-container-border-diskette">
                    <ul style="justify-content: end;">
                        <li class="li-half-circle-right"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-right"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="diskette" id="juan">
            <div class="border-diskette" id="diskette-section-1">
                <ul class="top-container-border-diskette">
                    <ul style="align-items:flex-start;">
                        <li class="li-half-circle-left"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-left"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
            <div class="center-diskette" id="diskette-section-2">
                <div class="center-diskette-section-1">
                    <ul>
                        <li class="li-top-center-left">
                            <div></div>
                        </li>
                        <li class="li-top-center-top"></li>
                        <li class="li-top-center-right">
                            <hr>
                        </li>
                    </ul>
                </div>
                <div class="center-diskette-section-2" >
                    <div class="div-center-1">
                        <ul>
                            <li class="li-circle-center"></li>
                            <li class="li-square-center"></li>
                        </ul>
                    </div>
                    <div class="div-center-2">
                        <span>Juan Salgado</span>
                        <hr>
                    </div>
                </div>
                <div class="center-diskette-section-3"></div>
            </div>
            <div class="border-diskette" id="diskette-section-3">
                <ul class="top-container-border-diskette">
                    <ul style="justify-content: end;">
                        <li class="li-half-circle-right"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-right"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="diskette" id="nicolas">
            <div class="border-diskette" id="diskette-section-1">
                <ul class="top-container-border-diskette">
                    <ul style="align-items:flex-start;">
                        <li class="li-half-circle-left"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-left"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
            <div class="center-diskette" id="diskette-section-2">
                <div class="center-diskette-section-1">
                    <ul>
                        <li class="li-top-center-left">
                            <div></div>
                        </li>
                        <li class="li-top-center-top"></li>
                        <li class="li-top-center-right">
                            <hr>
                        </li>
                    </ul>
                </div>
                <div class="center-diskette-section-2" >
                    <div class="div-center-1">
                        <ul>
                            <li class="li-circle-center"></li>
                            <li class="li-square-center"></li>
                        </ul>
                    </div>
                    <div class="div-center-2">
                        <span>Nicolas Barreto</span>
                        <hr>
                    </div>
                </div>
                <div class="center-diskette-section-3"></div>
            </div>
            <div class="border-diskette" id="diskette-section-3">
                <ul class="top-container-border-diskette">
                    <ul style="justify-content: end;">
                        <li class="li-half-circle-right"></li>
                    </ul>
                    <ul style="justify-content: center;">
                        <li class="li-circle-right"></li>
                    </ul>
                </ul>
                <ul class="bottom-container-border-diskette">
                    <li></li>
                </ul>
            </div>
        </div>
    </article>
</main>
@endsection
