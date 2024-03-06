<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Denomination;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class DenominationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $denominations=Denomination::all();
        return view('denomination.index',compact('denominations'));
    }
    
    public function create($code)
    {
        return view('denomination.create', compact('code'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
            'description'=>'required'
        ]);

        Denomination::create([
            'code_occupation'=>$request->code_occupation,
            'code'=>$request->code,
            'description'=>$request->description,
        ]);

        return redirect()->route('occupation.show', $request->code_occupation);
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
