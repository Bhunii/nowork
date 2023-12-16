<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies=Vacancy::all();
        return view('vacancies.index',compact('vacancies'));
    }
}
