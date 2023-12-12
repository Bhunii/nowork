<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use App\Models\Departament;
use Illuminate\Support\Str;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = auth()->user();
        $experiences = $user->candidate->curriculum->experiences;
        return view('experience.index', compact('experiences'));
    }

    public function create(){
        $departaments = Departament::with('municipalities')->get();
        return view('experience.create', compact('departaments'));
    }

    public function store(Request $request){

        $curriculum = Auth::user()->candidate->curriculum;

        Experience::create([
            'id_curriculum' => $curriculum->id,
            'name_company' => $request->name_company,
            'addres' => $request->addres,
            'id_denomination' => $request->id_denomination,
            'id_function' => $request->id_function,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return redirect()->route('experience.index');
    }

    public function edit($id){
        $user = auth()->user();
        $experience = $user->candidate->curriculum->experiences->find($id);
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, $id){
        $user = auth()->user();
        $experience = $user->candidate->curriculum->experiences->find($id);

        $experience -> update([
            'id_function' => $request->id_function,
            'start_date' => $request->start_date,
            'end_date' => $request->end_dates
        ]);

        return redirect()->route('experience.index')->with('mensaje','Experiencia Actualizada');
    }

    public function show($id){
        $user = auth()->user();
        $experience = $user->candidate->curriculum->experiences->find($id);

        return view('experience.show', compact('experience'));
    }

    public function destroy($id){
        $user = auth()->user();
        ($user->candidate->curriculum->experiences->find($id))->delete();

        return redirect()->route('experience.index')->with('mensaje', 'Experiencia Eliminada');
    }

}
