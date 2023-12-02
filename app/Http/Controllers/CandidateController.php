<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\User;

class CandidateController extends Controller
{
    public function index(){
        $candidates = Candidate::all();
        return view('candidate.index', ['candidates' => $candidates]);
    }

    public function create($id){
        $user = User::findOrFail($id);
        return view('candidate.create', compact('user'));
    }

    public function store(Request $request,$id){
        $user = User::findOrFail($id);

        Candidate::create([
            'user_id'=> $id,
            'selection_status'=> $request->selection_status,
            'points'=> $request->points
        ]);

        return redirect()->route('candidate.index');
    }

    public function edit($id){
        $candidate = Candidate::findOrFail($id);
        return view('candidate.edit', compact('candidate'));
    }

    public function update(Request $request,$id){
        $candidate = Candidate::findOrFail($id);

        $candidate->selection_status = $request->selection_status;
        $candidate->points = $request->points;
        $candidate->save();

        return redirect()->route('candidate.index');
    }
}
