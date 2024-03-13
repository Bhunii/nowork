<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Language;

class LanguageApiController extends Controller
{
    public function store(Request $request, $tabla)
    {
        $datos = $request->all();

        try {
            DB::table('languages')->insert($datos);
            return response()->json(['mensaje' => 'Idioma insertado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Error al insertar el idioma: ' . $e->getMessage()], 500);
        }
    }

    public function index(Request $request)
    {
        $languages = Language::all();
        return response()->json($languages);
    }

    public function GetById(Request $request)
    {
        $language = Language::all();
        return response()->json($language);
    }
}
