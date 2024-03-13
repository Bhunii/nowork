<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Denomination;

class DenominationController extends Controller
{
    public function index()
    {
        $denominations=Denomination::all();
        return view('denomination.index',compact('denominations'));
    }
    
    public function create()
    {
        return view('denomination.create');
    }

    public function store(Request $request)
    {
        Denomination::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code_denomination,
            'description'=>$request->description_denomination,
        ]);
    }

    public function edit(Denomination $denomination)
    {
        return view('denomination.edit', compact('denomination'));
    }

    public function update(Request $request, Denomination $denomination)
    {
        $denomination->update($request->all());
        return redirect()->route('denomination.index');
    }

    public function destroy(Denomination $denomination)
    {
        $denomination->delete();
        return redirect()->route('denomination.index');
    }

    public function show(Denomination $denomination)
    {
        return view('denomination.show', compact('denomination'));
    }
}
