<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::post('/insertar_registro/{tabla}', [ApiController::class, 'insertarRegistro']);
Route::get('/search_user/{user}', [ApiController::class, 'searchUser']);
Route::get('/search_occupations/{occupation}', [ApiController::class, 'searchOccupation']);
Route::get('/search_languages/{language}', [ApiController::class, 'searchLanguage']);
Route::get('/search_vacancies/{vacancy}', [ApiController::class, 'searchVacancy']);
Route::get('/search_selectionstatus/{selectionstatus}', [ApiController::class, 'searchSelectionStatus']);
Route::get('/users', [ApiController::class, 'users']);
Route::get('/occupations', [ApiController::class, 'occupations']);
Route::get('/languages', [ApiController::class, 'languages']);
Route::get('/vacancies', [ApiController::class, 'vacancies']);
Route::get('/selectionstatus', [ApiController::class, 'selectionstatus']);
