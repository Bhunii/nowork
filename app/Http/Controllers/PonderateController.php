<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ponderate;

class PonderateController extends Controller
{
    public function index()
    {
        
        $user = auth()->user();

        
        if ($user && $user->role_id == 3) {
            
            $ponderates = Ponderate::all();
            return view('ponderate.index', compact('ponderates'));
        }
    }

    public function create()
    {
        $user = auth()->user();

        if ($user && $user->role_id == 3) {
            return view('ponderate.create');
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'puntuacion_educacion' => 'required',
            'puntuacion_experiencias' => 'required',
            'puntuacion_idiomas' => 'required',
        ]);

        $ponderate = new Ponderate();
        $ponderate->puntuacion_educacion = $validatedData['puntuacion_educacion'];
        $ponderate->puntuacion_experiencias = $validatedData['puntuacion_experiencias'];
        $ponderate->puntuacion_idiomas = $validatedData['puntuacion_idiomas'];
        $ponderate->save();

        return redirect()->route('ponderate.index')->with('success', 'Candidato puntuado.');
    }

    public function edit($id)
    {
        $user = auth()->user();

        if ($user && $user->role_id == 3) {
            $ponderate = Ponderate::find($id);
            return view('ponderate.edit', compact('ponderate'));
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'puntuacion_educacion' => 'required|numeric',
            'puntuacion_experiencias' => 'required|numeric',
            'puntuacion_idiomas' => 'required|numeric',
        ]);

        $ponderate = Ponderate::find($id);
        $ponderate->puntuacion_educacion = $validatedData['puntuacion_educacion'];
        $ponderate->puntuacion_experiencias = $validatedData['puntuacion_experiencias'];
        $ponderate->puntuacion_idiomas = $validatedData['puntuacion_idiomas'];
        $ponderate->save();

        return redirect()->route('ponderate.index')->with('success', 'Puntuacion Actualizada.');
    }

    public function destroy($id)
    {
        $ponderate = Ponderate::find($id);
        $ponderate->delete();

        return redirect()->route('ponderate.index')->with('success', 'Ponderación eliminada correctamente.');
    }
}

