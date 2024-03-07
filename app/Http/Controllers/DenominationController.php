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

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function show()
    {
    }
}
