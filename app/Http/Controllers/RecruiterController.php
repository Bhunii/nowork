<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruiter;
use App\Models\Departament;
use Illuminate\Support\Str;

class RecruiterController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index(){
        $authuser = auth()->user();

        if($authuser->role_id == '2'){
            $recruiters = Recruiter::select('id','admission_date')->get;
            return view('recruiter.index', compact('recruiters'));
        }else{
            return redirect()->route('profile.index');
        }
    }

    public function create(){
    }

    public function store(){
    }

    public function edit()
    {
        $user = auth()->user();
        $departaments = Departament::with('municipalities')->get();
        return view('recruiter.edit', compact('user','departaments'));

    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $user->update([
            'phone' => $request->phone,
            'user_name' => $request->user_name,
            'email' => Str::lower($request->email)
        ]);

        $user->candidate->update([
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres' => Str::lower($request->addres)
        ]);

        return redirect()->route('profile.index')->with('mensaje','Datos Actualizados');
    }
}
