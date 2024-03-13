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
    
    public function create()
    {
        return view('knowledge.create');
    }

    public function store(Request $request)
    {
        Knowledge::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code_knowledge,
            'name'=>$request->name_knowledge,
            'description'=>$request->description_knowledge,
        ]);
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
