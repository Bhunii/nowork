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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CompanyController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\OccupationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\VacancyController;


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
Route::get('/user/edit_role', [UserController::class, 'edit_role'])->name('user.edit_role');
Route::put('/user/update_role', [UserController::class, 'update_role'])->name('user.update_role');
Route::get('/user/edit_data', [UserController::class, 'edit_data'])->name('user.edit_data');
Route::put('/user/update_data', [UserController::class, 'update_data'])->name('user.update_data');
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

//Management routes for candidate
Route::get('/candidate/index', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/candidate/store', [CandidateController::class, 'store'])->name('candidate.store');
Route::get('/candidate/edit', [CandidateController::class, 'edit'])->name('candidate.edit');
Route::put('/candidate/update', [CandidateController::class, 'update'])->name('candidate.update');

//rutas de ocupaciones
Route::get('/occupation/index', [OccupationController::class,'index'])->name('occupation.index');
Route::get('/occupation/create', [OccupationController::class,'create'])->name('occupation.create');
Route::post('/occupation/store', [OccupationController::class,'store'])->name('occupation.store');
Route::get('/occupation/edit/{occupation}', [OccupationController::class,'edit'])->name('occupation.edit');
Route::put('/occupation/update/{occupation}', [OccupationController::class,'update'])->name('occupation.update');
Route::delete('/occupation/destroy/{occupation}',[OccupationController::class, 'destroy'])->name('occupation.destroy');
Route::get('/occupation/show/{occupation}', [OccupationController::class,'show'])->name('occupation.show');

//Management routes for companies
Route::get('/company/index', [CompanyController::class, 'index'])->name('company.index');
Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
Route::get('/company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/{id}/update', [CompanyController::class, 'update'])->name('company.update');
Route::delete('/company/{id}/destroy', [CompanyController::class, 'destroy'])->name('company.destroy');
Route::get('/company/{id}/show', [CompanyController::class, 'show'])->name('company.show');

//Profile routes
Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profiles/recruiter', [RecruiterController::class, 'index'])->name('profiles.recruiter');


//Profile routes
Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profiles/recruiter', [RecruiterController::class, 'index'])->name('profiles.recruiter');


//Management routes for candidate
Route::get('/curriculum/index', [CurriculumController::class, 'index'])->name('curriculum.index');
Route::get('/curriculum/create', [CurriculumController::class, 'create'])->name('curriculum.create');
Route::get('/curriculum/edit', [CurriculumController::class, 'edit'])->name('curriculum.edit');
Route::put('/curriculum/update', [CurriculumController::class, 'update'])->name('curriculum.update');

//Management routes for studies of candidate
Route::get('/study/index', [StudyController::class, 'index'])->name('study.index');
Route::get('/study/create', [StudyController::class, 'create'])->name('study.create');
Route::put('/study/store', [StudyController::class, 'store'])->name('study.store');

//Management routes for experiences of candidate
Route::get('/experience/index', [ExperienceController::class, 'index'])->name('experience.index');
Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
Route::put('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');

//Management routes for languages of candidate
Route::get('/language/index', [LanguageController::class, 'index'])->name('language.index');
Route::get('/language/create', [LanguageController::class, 'create'])->name('language.create');
Route::put('/language/store', [LanguageController::class, 'store'])->name('language.store');

Route::get('/charge/index',[ChargeController::class,'index'])->name('charge.index');
Route::get('/charge/create',[ChargeController::class,'create'])->name('charge.create');
Route::post('/charge/store',[ChargeController::class,'store'])->name('charge.store');
Route::get('/charge/{id}/edit', [ChargeController::class, 'edit'])->name('cahrge.edit');
Route::put('/charge/{id}/update', [ChargeController::class, 'update'])->name('charge.update');

Route::get('/vacancy/index',[VacancyController::class,'index'])->name('vacancy.index');
Route::get('/vacancy/create',[VacancyController::class,'create'])->name('vacancy.create');
Route::post('/vacancy/store',[VacancyController::class,'store'])->name('vacancy.store');
Route::get('/vacancy/{id}/edit', [VacancyController::class, 'edit'])->name('vacancy.edit');
Route::put('/vacancy/{id}/update', [VacancyController::class, 'update'])->name('vacancy.update');

