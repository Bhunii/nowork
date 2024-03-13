<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;


class OccupationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $occupations=Occupation::select('code_occupation','name','description')->get();;
        return view('occupation.index',compact('occupations'));
    }

    public function create()
    {
        return view('occupation.create');
    }

    public function store(Request $request)
    {
        //Ocupacion
        Occupation::create([
            'code_occupation' => $request->code_occupation,
            'name' => $request->name_occupation,
            'description' => $request->description_occupation,
        ]);

        return redirect()->route('occupation.index');
    }


    public function edit($code_occupation)
    {
        $occupation = Occupation::where('code_occupation', $code_occupation)
            ->select('code_occupation', 'name', 'description')
            ->first();

        return view('occupation.edit', compact('occupation'));
    }

    public function update(Request $request, $code_occupation)
    {
        $occupation = Occupation::where('code_occupation', $code_occupation)
            ->select('code_occupation', 'name', 'description')
            ->first();

        $occupation->update($request->all());

        return redirect()->route('occupation.index');
    }


    public function destroy($code_occupation)
    {
        $occupation = Occupation::where('code_occupation', $code_occupation)->first();
        $occupation->delete();

        return redirect()->route('occupation.index');
    }


    public function show($code_occupation)
    {
        $occupation = Occupation::where('code_occupation', $code_occupation)->first();
        return view('occupation.show', compact('occupation'));
    }

}
