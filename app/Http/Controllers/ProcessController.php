<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;

class ProcessController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    //public function index()
    //{
    //    $candidates=Candidate::all();
    //    return view('candidate.index',compact('candidates'));
    //    $authuser = auth()->user();
    //    if($authuser->role_id == '3'){
    //        $vacancies = Auth::user()->recruiter->company->vacancies;
    //        $candidates= collect();
    //        foreach ($vacancies as $vacancy){
    //            if ($vacancy->candidates){
    //                $candidates= $candidates->merge($vacancy->candidates->where('role_id', '4'));
    //            }
    //        }
    //        return view('candidate.index',compact('candidates'));
    //    }else{
    //        return redirect()->route('candidate.index');
    //    }
    //}

    public function index(){
        $authuser = auth()->user();


        if($authuser->role_id == 4){

            $processes = $authuser->candidate->load('processes')->processes;
            return view('process.index', compact('processes'));

        }elseif($authuser->role_id == 3){

            $processes = $authuser->recruiter->company->vacancy->processes;
            return view('process.index', compact('processes'));

        }

    }

    public function create(){
    }

    public function store($id){
        $authuser = auth()->user()->candidate;
        $vacancy = $id;

        Process::create([
            'id_vacancy' => $vacancy,
            'id_candidate' => $authuser->id
        ]);

        return redirect()->route('process.index');
    }

    public function edit(){
    }

    public function update(){

    }


}
