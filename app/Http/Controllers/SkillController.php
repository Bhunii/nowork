<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills=Skill::all();
        return view('skill.index',compact('skills'));
    }
    
    public function create()
    {
        return view('skill.create');
    }

    public function store(Request $request)
    {
        Skill::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code,
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
    }

    public function edit(Skill $skill)
    {
        return view('skill.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->all());
        return redirect()->route('skill.index');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skill.index');
    }

    public function show(Skill $skill)
    {
        return view('skill.show', compact('skill'));
    }
}
