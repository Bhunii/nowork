<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use App\Models\Curriculum;
use App\Models\Departament;
use App\Models\Municipality;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class CandidateController extends Controller
{
    public function index():View
    {
        $candidates = Candidate::all();
        return view('candidate.index', ['candidates' => $candidates]);
    }

    public function create():View
    {
        $departaments = Departament::all();
        $municipalities = Municipality::all();
        // $user = User::findOrFail($id), compact('user');
        return view('candidate.create', compact('departaments'), compact('municipalities'));
    }

    public function store(CandidateRequest $request):RedirectResponse
    {
        // $user = User::findOrFail($id);

        User::create([
            'doc_type' => $request->doc_type,
            'doc_num' => Str::upper($request->doc_num),
            'name' => Str::upper($request->name),
            'last_name' => Str::upper($request->last_name),
            'phone' => $request->phone,
            'genre' => $request->genre,
            'user_name' => $request->user_name,
            'email' => Str::lower($request->email),
            'password' => Hash::make($request->password)
        ]);

        Candidate::create([
            'user_id' => User::latest('id')->first()->id,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres' => Str::lower($request->addres)
        ]);

        Curriculum::create([
            'id_candidate' => Candidate::latest('id')->first()->id,
            'occupational_profile'
        ]);

        return redirect()->route('login')->with('mensaje','Usuario Creado Exitosamente');
    }

    public function edit():View
    {
        $user = auth()->user();
        $departaments = Departament::all();
        $municipalities = Municipality::all();

        return view('candidate.edit', compact('user','departaments','municipalities'));
    }

    public function update(Request $request):RedirectResponse
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
