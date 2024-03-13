<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Departament;
use Illuminate\Support\Facades\View;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies=Vacancy::with('departament')->get();
        $departaments=Departament::all();

        $departamentsJson = json_encode($departaments->pluck('name'));
        View::share('departamentsJson', $departamentsJson);

        return view('vacancies.index',compact('vacancies', 'departaments'));
    }
}
