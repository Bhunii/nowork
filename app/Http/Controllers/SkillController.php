<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Skill;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    }

    public function create($code)
    {
        return view('skill.create', compact('code'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
            'name'=>'required',
            'description'=>'required'
        ]);

        Skill::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code,
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        return redirect()->route('occupation.show', $request->code_occupation);
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function show($code)
    {
        $occupation = Occupation::findOrFail($code);
        $skills = $occupation->skills()->select('code','name','description')->get();

        return view('skill.show', compact('skills', 'code'));
    }
}
