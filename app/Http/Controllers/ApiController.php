<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Occupation;
use App\Models\Language;
use App\Models\SelectionStatus;
use App\Models\Vacancy;


class ApiController extends Controller
{
    public function insertarRegistro(Request $request, $tabla)
    {
        $datos = $request->query();

        try {
            DB::table($tabla)->insert($datos);
            return response()->json(['mensaje' => 'Registro insertado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Error al insertar el registro: ' . $e->getMessage()], 500);
        }
    }

    public function users(Request $request){
        $users= User::all();
        return response()->json($users);
    }

    public function languages(Request $request){
        $languages= Language::all();
        return response()->json($languages);
    }

    public function occupations(Request $request){
        $occupations= Occupation::all();
        return response()->json($occupations);
    }

    public function selectionstatus(Request $request){
        $selectionstatus= SelectionStatus::all();
        return response()->json($selectionstatus);
    }

    public function vacancies(Request $request){
        $vacancies= Vacancy::all();
        return response()->json($vacancies);
    }

    public function searchUser(Request $request, $user){

        try {
            $search=User::findOrFail($user);
            return response()->json($search);
        } catch (\Exception $e) {
            return response()->json('Error al buscar');
        }
    }
}

