<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/index', [HomeController::class, 'index'])->name('home.index')->middleware('auth');

//Authentication routes
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('logout', [LogoutController::class, 'store'])->name('logout');
Route::post('login', [LoginController::class, 'store']);

Route::get('/characters', [RoleController::class, 'characters'])->name('characters');

//Management routes for role
Route::get('/role/index', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');

//Management routes for user
Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit_data', [UserController::class, 'edit_data'])->name('user.edit_data');
Route::put('/user/{id}/update_data', [UserController::class, 'update_data'])->name('user.update_data');
Route::delete('/user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{id}/show', [UserController::class, 'show'])->name('user.show');

//management routes for instructor
Route::get('/instructor/index', [InstructorController::class, 'index'])->name('instructor.index');
Route::get('/instructor/{id}/create', [InstructorController::class, 'create'])->name('instructor.create');
Route::post('/instructor/{id}/store', [InstructorController::class, 'store'])->name('instructor.store');
Route::get('/instructor/{id}/edit', [InstructorController::class, 'edit'])->name('instructor.edit');
Route::put('/instructor/{id}/update', [InstructorController::class, 'update'])->name('instructor.update');

//Management routes for recruiter
Route::get('/recruiter/index', [RecruiterController::class, 'index'])->name('recruiter.index');
Route::get('/recruiter/{id}/create', [RecruiterController::class, 'create'])->name('recruiter.create');
Route::post('/recruiter/{id}/store', [RecruiterController::class, 'store'])->name('recruiter.store');
Route::get('/recruiter/{id}/edit', [RecruiterController::class, 'edit'])->name('recruiter.edit');
Route::put('/recruiter/{id}/update', [RecruiterController::class, 'update'])->name('recruiter.update');

//management routes for candidate
Route::get('/candidate/index', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/candidate/{id}/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/candidate/{id}/store', [CandidateController::class, 'store'])->name('candidate.store');
Route::get('/candidate/{id}/edit', [CandidateController::class, 'edit'])->name('candidate.edit');
Route::put('/candidate/{id}/update', [CandidateController::class, 'update'])->name('candidate.update');
