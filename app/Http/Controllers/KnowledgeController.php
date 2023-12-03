<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Knowledge;

class KnowledgeController extends Controller
{
    public function index()
    {
        $knowledges=Knoledge::all();
        return view('knowledge.index',compact('knowledges'));
    }
    
    public function create()
    {
        return view('knowledge.create');
    }

    public function store(Request $request)
    {
        Knoledge::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code,
            'name'=>$request->code,
            'description'=>$request->code,
        ]);
    }

    public function edit(Knoledge $knowledge)
    {
        return view('knowledge.edit', compact('knowledge'));
    }

    public function update(Request $request, Knoledge $knowledge)
    {
        $knowledge->update($request->all());
        return redirect()->route('knowledge.index');
    }

    public function destroy(Knoledge $knowledge)
    {
        $knowledge->delete();
        return redirect()->route('knowledge.index');
    }

    public function show(Knoledge $knowledge)
    {
        return view('knowledge.show', compact('knowledge'));
    }
}
