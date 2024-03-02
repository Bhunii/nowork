<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\OccupationApiController;
use App\Http\Controllers\LanguageApiController;
use App\Http\Controllers\VacancyApiController;
use App\Http\Controllers\SelectionStatusApiController;
use App\Http\Controllers\ApiController;

Route::post('/user',[UserApiController::class, 'store']);
Route::get('/users',[UserApiController::class, 'index']);
Route::get('/user/{id}',[UserApiController::class, 'GetById']);

Route::post('/occupation',[OccupationApiController::class, 'store']);
Route::get('/occupations',[OccupationApiController::class, 'index']);
Route::get('/occupation/{id}',[OccupationApiController::class, 'GetById']);

Route::post('/language',[LanguageApiController::class, 'store']);
Route::get('/languages',[LanguageApiController::class, 'index']);
Route::get('/language/{id}',[LanguageApiController::class, 'GetById']);

Route::post('/vacancy',[VacancyApiController::class, 'store']);
Route::get('/vacancies',[VacancyApiController::class, 'index']);
Route::get('/vacancy/{id}',[VacancyApiController::class, 'GetById']);

Route::post('/selectionstatus',[SelectionStatusApiController::class, 'store']);
Route::get('/selectionstatus',[SelectionStatusApiController::class, 'index']);
Route::get('/selectionstatus/{id}',[SelectionStatusApiController::class, 'GetById']);