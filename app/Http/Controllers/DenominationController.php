<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Denomination;

class DenominationController extends Controller
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
            'code'=>$request->code_denomination,
            'description'=>$request->description_denomination,
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
        $denominations = Denomination::where('code_occupation', $code)->select('code', 'description')->get();

        return view('denomination.show', compact('denominations', 'code'));
    }
}
