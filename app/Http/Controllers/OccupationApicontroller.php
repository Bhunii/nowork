<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Occupation;

class OccupationApiController extends Controller
{
    public function store(Request $request, $tabla)
    {
        $datos = $request->all();

        try {
            DB::table('occupations')->insert($datos);
            return response()->json(['mensaje' => 'Idioma insertado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Error al insertar el idioma: ' . $e->getMessage()], 500);
        }
    }

    public function index(Request $request)
    {
        $occupations = Occupation::all();
        return response()->json($occupations);
    }

    public function GetById(Request $request)
    {
        $occupation = Occupation::all();
        return response()->json($occupation);
    }
}

