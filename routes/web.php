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
use App\Http\Controllers\OccupationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\ApiController;



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

//Home
Route::get('/', function () {
    return view('/home/index');
});
Route::get('/home/index', [HomeController::class, 'index'])->name('home.index');

//Vacancies
Route::get('/vacancies/index', [VacanciesController::class, 'index'])->name('vacancies.index');

//About
Route::get('/about/index',[AboutController::class,'index'])->name('about.index');

//Authentication routes
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LogoutController::class, 'store'])->name('logout');

//Management routes for role
Route::get('/role/index', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');

//Management routes for user
Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit_role', [UserController::class, 'edit_role'])->name('user.edit_role');
Route::put('/user/{id}/update_role', [UserController::class, 'update_role'])->name('user.update_role');
Route::get('/user/edit_data', [UserController::class, 'edit_data'])->name('user.edit_data');
Route::put('/user/update_data', [UserController::class, 'update_data'])->name('user.update_data');
Route::delete('/user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{id}/show', [UserController::class, 'show'])->name('user.show');

//management routes for instructor
Route::get('/instructor/index', [InstructorController::class, 'index'])->name('instructor.index');
Route::get('/instructor/create', [InstructorController::class, 'create'])->name('instructor.create');
Route::post('/instructor/store', [InstructorController::class, 'store'])->name('instructor.store');
Route::get('/instructor/edit', [InstructorController::class, 'edit'])->name('instructor.edit');
Route::put('/instructor/update', [InstructorController::class, 'update'])->name('instructor.update');

//Management routes for recruiter
Route::get('/recruiter/index', [RecruiterController::class, 'index'])->name('recruiter.index');
Route::get('/recruiter/create', [RecruiterController::class, 'create'])->name('recruiter.create');
Route::post('/recruiter/store', [RecruiterController::class, 'store'])->name('recruiter.store');
Route::get('/recruiter/edit', [RecruiterController::class, 'edit'])->name('recruiter.edit');
Route::put('/recruiter/update', [RecruiterController::class, 'update'])->name('recruiter.update');

//Management routes for candidate
Route::get('/candidate/index', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/candidate/store', [CandidateController::class, 'store'])->name('candidate.store');
Route::get('/candidate/edit', [CandidateController::class, 'edit'])->name('candidate.edit');
Route::put('/candidate/update', [CandidateController::class, 'update'])->name('candidate.update');
Route::get('/candidate/show/{candidate}', [CandidateController::class, 'show'])->name('candidate.show');

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
Route::get('/company/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/update', [CompanyController::class, 'update'])->name('company.update');
Route::delete('/company/{id}/destroy', [CompanyController::class, 'destroy'])->name('company.destroy');
Route::get('/company/{id}/show', [CompanyController::class, 'show'])->name('company.show');

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
Route::post('/study/store', [StudyController::class, 'store'])->name('study.store');
Route::get('/study/{id}/edit', [StudyController::class, 'edit'])->name('study.edit');
Route::put('/study/{id}/update', [StudyController::class, 'update'])->name('study.update');
Route::get('/study/{id}/show', [StudyController::class, 'show'])->name('study.show');
Route::delete('/study/{id}/destroy', [StudyController::class, 'destroy'])->name('study.destroy');

//Management routes for experiences of candidate
Route::get('/experience/index', [ExperienceController::class, 'index'])->name('experience.index');
Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
Route::get('/experience/{id}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
Route::put('/experience/{id}/update', [ExperienceController::class, 'update'])->name('experience.update');
Route::get('/experience/{id}/show', [ExperienceController::class, 'show'])->name('experience.show');
Route::delete('/experience/{id}/destroy', [ExperienceController::class, 'destroy'])->name('experience.destroy');

//Management routes for languages of candidate
Route::get('/language/index', [LanguageController::class, 'index'])->name('language.index');
Route::get('/language/create', [LanguageController::class, 'create'])->name('language.create');
Route::post('/language/store', [LanguageController::class, 'store'])->name('language.store');
Route::get('/language/{id}/edit', [LanguageController::class, 'edit'])->name('language.edit');
Route::put('/language/{id}/update', [LanguageController::class, 'update'])->name('language.update');
Route::get('/language/{id}/show', [LanguageController::class, 'show'])->name('language.show');
Route::delete('/language/{id}/destroy', [LanguageController::class, 'destroy'])->name('language.destroy');

//Management routes for vacancies of recruiter
Route::get('/vacancy/index',[VacancyController::class,'index'])->name('vacancy.index');
Route::get('/vacancy/create',[VacancyController::class,'create'])->name('vacancy.create');
Route::post('/vacancy/store',[VacancyController::class,'store'])->name('vacancy.store');
Route::get('/vacancy/edit', [VacancyController::class, 'edit'])->name('vacancy.edit');
Route::put('/vacancy/update', [VacancyController::class, 'update'])->name('vacancy.update');
Route::delete('/vacancy/{id}/destroy', [VacancyController::class, 'destroy'])->name('vacancy.destroy');

//Management routes for charge of recruiter
Route::get('/charge/index',[ChargeController::class,'index'])->name('charge.index');
Route::get('/charge/create',[ChargeController::class,'create'])->name('charge.create');
Route::post('/charge/store',[ChargeController::class,'store'])->name('charge.store');
Route::get('/charge/edit', [ChargeController::class, 'edit'])->name('cahrge.edit');
Route::put('/charge/update', [ChargeController::class, 'update'])->name('charge.update');

//Management routes for vacancy process of recruiter and candidate
Route::get('/process/index',[ProcessController::class,'index'])->name('process.index');
Route::get('/process/create',[ProcessController::class,'create'])->name('process.create');
Route::post('/process/{id}/store',[ProcessController::class,'store'])->name('process.store');
Route::get('/process/edit', [ProcessController::class, 'edit'])->name('process.edit');
Route::put('/process/update', [ProcessController::class, 'update'])->name('process.update');

