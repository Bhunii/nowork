<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Functions;

class FunctionsController extends Controller
{
    public function index()
    {
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

    public function edit()
    {
    }

    public function update(Request $request,)
    {
    }

    public function destroy()
    {
    }

    public function show($code)
    {
        $occupation = Occupation::findOrFail($code);
        $functions = $occupation->functions;

        return view('functions.show', compact('functions', 'code'));
    }
}
