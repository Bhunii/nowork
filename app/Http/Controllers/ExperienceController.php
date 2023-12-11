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
        return view('experience.index', compact('user','experiences'));
    }

    public function create(){
        $departaments = Departament::with('municipalities')->get();
        return view('experience.create', compact('user','departaments'));
    }

    public function store(Request $request){

        $curriculum = Auth::user()->candidate->curriculum;

        Experience::create([
            'curriculum_id' => $curriculum->id,
            'name_company' => $request->name_company,
            'company_addres' => $request->company_addres,
            'id_denominacion_company' => $request->id_denominacion_company,
            'id_function' => $request->id_function,
            'start_date' => $request->start_date,
            'end_date_company' => $request->end_date_company
        ]);

        return redirect()->route('experience.index');
    }
}
