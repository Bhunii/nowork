<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Skill;
use App\Models\Knowledge;

class OccupationController extends Controller
{
    public function index()
    {
        $occupations=Occupation::all();
        return view('occupation.index',compact('occupations'));
    }
    
    public function create()
    {
        return view('occupation.create');
    }

    public function store(Request $request)
    {
        Occupation::create([
            'code_occupation' => $request->code_occupation,
            'name' => $request->name_occupation,
            'description' => $request->description_occupation,
        ]);

        Skill::create([
            'code_occupation' => Occupation::latest('code_occupation')->first()->code_occupation,
            'code'=>$request->code_skill,
            'name' => $request->name_skill,
            'description' => $request->description_skill,
        ]);

        Knowledge::create([
            'code_occupation'=>Occupation::latest('code_occupation')->first()->code_occupation,
            'code'=>$request->code_knowledge,
            'name'=>$request->name_knowledge,
            'description'=>$request->description_knowledge,
        ]);
        return redirect()->route('occupation.create');
    }


    public function edit(Occupation $occupation)
    {
        return view('occupation.edit', compact('occupation'));
    }

    public function update(Request $request, Occupation $occupation)
    {
        $occupation->update($request->all());
        return redirect()->route('occupation.index');
    }

    public function destroy(Occupation $occupation)
    {
        $occupation->delete();
        return redirect()->route('occupation.index');
    }

    public function show(Occupation $occupation)
    {
        return view('occupation.show', compact('occupation'));
    }
}
