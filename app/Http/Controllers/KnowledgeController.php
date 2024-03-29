<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Knowledge;

class KnowledgeController extends Controller
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
            'code'=>$request->code_knowledge,
            'name'=>$request->name_knowledge,
            'description'=>$request->description_knowledge,
        ]);

        return redirect()->route('occupation.show',$request->code_occupation);
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
        $knowledges = Knowledge::where('code_occupation', $code)->select('code','name','description')->get();

        return view('knowledge.show', compact('knowledges', 'code'));
    }
}
