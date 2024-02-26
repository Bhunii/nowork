<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}

