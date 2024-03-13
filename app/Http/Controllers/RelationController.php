<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Occupation;
use App\Models\Relation;

class RelationController extends Controller
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
        return view('relation.create', compact('code'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code_occupation_relation' => 'required'
        ]);

        Relation::create([
            'code_occupation'=>$request->code_occupation,
            'code_occupation_relation'=>$request->code_occupation_relation
        ]);

        return redirect()->route('occupation.show'. $request->code_occcupation);
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
        $relations = Relation::where('code_occupation', $code)->select('code_occupation_relation')->get();

        return view('relation.show', compact('relations', 'code'));
    }
}
