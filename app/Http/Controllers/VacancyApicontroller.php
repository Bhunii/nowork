<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vacancy;

class VacancyApiController extends Controller
{
    public function store(Request $request, $tabla)
    {
        $datos = $request->all();

        try {
            DB::table('vacancies')->insert($datos);
            return response()->json(['mensaje' => 'Vacante insertada correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Error al insertar la vacante: ' . $e->getMessage()], 500);
        }
    }

    public function index(Request $request)
    {
        $vacancies = Vacancy::all();
        return response()->json($vacancies);
    }

    public function GetById(Request $request)
    {
        $vacancy = Vacancy::all();
        return response()->json($vacancy);
    }
}
