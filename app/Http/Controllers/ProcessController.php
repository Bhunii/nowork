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

    public function index($confirm)
    {
        $authuser = auth()->user();

        if($authuser->role_id == 4){

            $processes = Process::where('id_candidate', $confirm)->get();
            return view('process.index', compact('processes'));

        }elseif($authuser->role_id == 3){

            $processes = Process::where('id_vacancy', $confirm)->get();
            return view('process.index', compact('processes'));

        }else{
            return redirect()->route('profile.show' ,['username' => auth()->user()->user_name]);
        }

    }

    public function create(){
    }

    public function store($id){
        $authuser = auth()->user();

        if ($authuser->role_id == 4) {

            $candidate = $authuser->candidate->id;

            Process::create([
                'id_vacancy' => $id,
                'id_candidate' => $candidate
            ]);

            return redirect()->route('process.index',['confirm' => auth()->user()->candidate->id]);
        } else {
            return redirect()->route('profile.show' ,['username' => auth()->user()->user_name]);
        }
    }

    public function edit(){
    }

    public function update(){

    }


}
