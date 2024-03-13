<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SelectionStatus;

class SelectionStatusApiController extends Controller
{
    public function store(Request $request, $tabla)
    {
        $datos = $request->all();

        try {
            DB::table('selectionstatus')->insert($datos);
            return response()->json(['mensaje' => 'Estado de seleccion insertado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Error al insertar el estado de seleccion: ' . $e->getMessage()], 500);
        }
    }

    public function index(Request $request)
    {
        $selectionstatus = SelectionStatus::all();
        return response()->json($selectionstatus);
    }

    public function GetById(Request $request)
    {
        $selectionstatus = SelectionStatus::all();
        return response()->json($selectionstatus);
    }
}
