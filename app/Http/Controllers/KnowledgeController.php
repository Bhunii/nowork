<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Knowledge;

class KnowledgeController extends Controller
{
    public function index()
    {
        $knowledges=Knowledge::all();
        return view('knowledge.index',compact('knowledges'));
    }
    
    public function create($code)
    {
        return view('knowledge.create', compact('code'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
            'name'=>'required',
            'description'=>'required'
        ]);

        Knowledge::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code,
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        return redirect()->route('occupation.show',$request->code_occupation);
    }

    public function edit(Knowledge $knowledge)
    {
        return view('knowledge.edit', compact('knowledge'));
    }

    public function update(Request $request, Knowledge $knowledge)
    {
        $knowledge->update($request->all());
        return redirect()->route('knowledge.index');
    }

    public function destroy(Knowledge $knowledge)
    {
        $knowledge->delete();
        return redirect()->route('knowledge.index');
    }

    public function show(Knowledge $knowledge)
    {
        return view('knowledge.show', compact('knowledge'));
    }
}
