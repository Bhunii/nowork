<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Skill;
use App\Models\Knowledge;
use App\Models\Relation;
use App\Models\Functions;
use App\Models\Denomination;


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
        //Ocupacion
        Occupation::create([
            'code_occupation' => $request->code_occupation,
            'name' => $request->name_occupation,
            'description' => $request->description_occupation,
        ]);

        return redirect()->route('occupation.index');
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

    public function show($code_occupation)
    {
        $occupation = Occupation::findOrFail($code_occupation);
        $functions= $occupation->functions;
        $skills = $occupation->skills;
        $knowledges = $occupation->knowledges;
        $denominations = $occupation->denominations;
        $relations = $occupation->relations;
        return view('occupation.show', compact('occupation', 'functions', 'skills', 'knowledges', 'denominations', 'relations'));
    }
}
