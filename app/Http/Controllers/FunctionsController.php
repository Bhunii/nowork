<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Functions;

class FunctionsController extends Controller
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

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function show($code)
    {
        $occupation = Occupation::findOrFail($code);
        $functions = $occupation->functions()->select('code','description')->get();

        return view('functions.show', compact('functions', 'code'));
    }
}
