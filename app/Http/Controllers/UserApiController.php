<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class UserApiController extends Controller
{
    public function store(Request $request, $tabla)
    {
        $datos = $request->all();

        try {
            DB::table('users')->insert($datos);
            return response()->json(['mensaje' => 'Usuario insertado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Error al insertar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function index(Request $request)
    {
        $users = User::all();
        return response()->json($users);
    }

    public function GetById(Request $request)
    {
        $user = User::all();
        return response()->json($user);
    }
}

