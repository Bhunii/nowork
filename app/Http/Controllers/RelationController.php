<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Relation;

class RelationController extends Controller
{
    public function index()
    {
        $relations=Relation::all();
        return view('relation.index',compact('relations'));
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

    public function edit(Relation $relation)
    {
        return view('relation.edit', compact('relation'));
    }

    public function update(Request $request, Relation $relation)
    {
        $relation->update($request->all());
        return redirect()->route('relation.index');
    }

    public function destroy(Relation $relation)
    {
        $relation->delete();
        return redirect()->route('relation.index');
    }

    public function show(Relation $relation)
    {
        return view('relation.show', compact('relation'));
    }
}
