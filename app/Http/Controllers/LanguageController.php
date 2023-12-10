<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use App\Models\Departament;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = auth()->user();
        $languages = $user->candidate->curriculum->languages;

        return view('language.index', compact('user','languages'));
    }

    public function create(){
        return view('language.create');
    }

    public function store(Request $request){

        $curriculum = Auth::user()->candidate->curriculum;

        Language::create([
            'curriculum_id' => $curriculum->id,
            'id_type_language' => $request->id_type_language
        ]);

        return redirect()->route('language.index');
    }
}
