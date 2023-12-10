<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurriculumRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Departament;
use App\Models\Study;
use App\Models\Language;
use App\Models\Experience;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = auth()->user();
        $departaments = Departament::with('municipalities')->get();
        $curriculum = $user->candidate->curriculum;

        return view('curriculum.index', compact('user','departaments','curriculum'));
    }

    public function create(){
        return view('curriculum.create');
    }

    public function store(Request $request){

        $curriculum = Auth::user()->candidate->curriculum;

        Study::create([
            'curriculum_id' => $curriculum->id,
            'name_institution' => $request->name_institution,
            'id_denomination' => $request->id_denomination,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres' => Str::lower($request->addres),
            'end_date' => $request->end_date
        ]);

        Experience::create([
            'curriculum_id' => $curriculum->id,
            'name_company' => $request->name_company,
            'company_addres' => $request->company_addres,
            'id_denominacion_company' => $request->id_denominacion_company,
            'id_function' => $request->id_function,
            'start_date' => $request->start_date,
            'end_date_company' => $request->end_date_company
        ]);

        Language::create([
            'curriculum_id' => $curriculum->id,
            'id_type_language' => $request->id_type_language
        ]);

        return redirect()->route('profile.index');
    }

    public function edit(){
        $user = auth()->user();
        return view('curriculum.edit', compact('user'));
    }

    public function update(CurriculumRequest $request):RedirectResponse
    {
        $user = auth()->user();

        $curriculum = $user->candidate->curriculum;

        $curriculum->update([
            'occupational_profile' => $request->occupational_profile
        ]);

        return redirect()->route('profile.index');
    }

    public function destoy(){
        // $user = auth()->user();
        return view('profile.index', compact('user'));
    }

}
