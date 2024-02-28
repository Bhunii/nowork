<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::post('/insertar_registro/{tabla}', [ApiController::class, 'insertarRegistro']);
Route::get('/search_user/{user}', [ApiController::class, 'searchUser']);
Route::get('/search_occupations/{}', [ApiController::class, 'search']);
Route::get('/search_languages/{}', [ApiController::class, 'search']);
Route::get('/search_vacancies/{}', [ApiController::class, 'search']);
Route::get('/search_selectionstatus/{}', [ApiController::class, 'search']);
