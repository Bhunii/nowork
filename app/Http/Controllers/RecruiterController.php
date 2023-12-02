<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;
use App\Models\User;

class RecruiterController extends Controller
{
    public function index(){
        $recruiters = Recruiter::all();
        return view('recruiter.index', ['recruiters' => $recruiters]);
    }

    public function create($id){
        $user = User::findOrFail($id);
        return view('recruiter.create', compact('user'));
    }

    public function store(Request $request,$id){
        $user = User::findOrFail($id);

        Recruiter::create([
            'user_id'=> $id,
            'admission_date'=> $request->admission_date
        ]);

        return redirect()->route('recruiter.index');
    }

    public function edit($id){
        $recruiter = Recruiter::findOrFail($id);
        return view('recruiter.edit', compact('recruiter'));
    }

    public function update(Request $request,$id){
        $recruiter = recruiter::findOrFail($id);

        $recruiter->admission_date = $request->admission_date;
        $recruiter->save();

        return redirect()->route('recruiter.index');
    }
}
