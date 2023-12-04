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

        $user = User::create([
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

        $candidate = Candidate::create([
            'user_id' => $user->id,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres' => Str::lower($request->addres)
        ]);

        Curriculum::create([
            'id_candidate' => $candidate->id,
        ]);

        return redirect()->route('login')->with('mensaje','Usuario Creado Exitosamente');
    }

    public function edit($id):View
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidate.edit', compact('candidate'));
    }

    public function update(Request $request,$id):RedirectResponse
    {
        $candidate = Candidate::findOrFail($id);

        $candidate->selection_status = $request->selection_status;
        $candidate->points = $request->points;
        $candidate->save();

        return redirect()->route('candidate.index');
    }
}
