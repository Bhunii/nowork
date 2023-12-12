<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
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
            'id_curriculum' => $curriculum->id,
            'id_type_language' => $request->id_type_language
        ]);

        return redirect()->route('language.index')->with('mensaje','Idioma Agregado');
    }

    public function edit($id){
        $user = auth()->user();
        $language = $user->candidate->curriculum->languages->find($id);
        return view('language.edit', compact('language'));
    }

    public function update(Request $request,$id){
        $user = auth()->user();
        $language = $user->candidate->curriculum->languages->find($id);

        $language -> update([
            'id_type_language' => $request->id_type_language
        ]);

        return redirect()->route('language.index')->with('mensaje','Idioma Actualizado');
    }

    public function show($id){
        $user = auth()->user();
        $language = $user->candidate->curriculum->languages->find($id);

        return view('language.show', compact('language'));
    }

    public function destroy($id){
        $user = auth()->user();
        ($user->candidate->curriculum->languages->find($id))->delete();

        return redirect()->route('language.index')->with('mensaje', 'Experiencia Eliminada');
    }

}
