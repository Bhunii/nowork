<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Functions;

class FunctionsController extends Controller
{
    public function index()
    {
        $functionss=Functions::all();
        return view('functions.index',compact('functionss'));
    }

    public function create($code)
    {
        return view('functions.create', compact('code'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
            'description'=>'required'
        ]);

        Functions::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code,
            'description'=>$request->description,
        ]);

        return redirect()->route('occupation.show', $request->code_occupation);
    }

    public function edit(Functions $functions)
    {
        return view('functions.edit', compact('functions'));
    }

    public function update(Request $request, Functions $functions)
    {
        $functions->update($request->all());
        return redirect()->route('functions.index');
    }

    public function destroy(Functions $functions)
    {
        $functions->delete();
        return redirect()->route('functions.index');
    }

    public function show(Functions $functions)
    {
        return view('functions.show', compact('functions'));
    }
}
