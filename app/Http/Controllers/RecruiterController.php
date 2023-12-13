<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;
use App\Models\User;

class RecruiterController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index(){
        $authuser = auth()->user();

        if($authuser->role_id == '2'){
            $recruiters = Recruiter::all();
            return view('recruiter.index', compact('recruiters'));
        }else{
            return redirect()->route('profile.index');
        }
    }

    public function create(){
    }

    public function store(){
    }

    public function edit(){
    }

    public function update(){
    }
}
