<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurriculumRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Departament;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index(){
        $user = auth()->user();
        $departaments = Departament::with('municipalities')->get();
        return view('curriculum.index', compact('user','departaments'));
    }

    public function create(){
        $user = auth()->user();
        return view('curriculum.create', compact('user'));
    }

    public function store($id){
    }

    public function edit(){
        $user = auth()->user();
        return view('curriculum.edit', compact('user'));
    }

    public function update(CurriculumRequest $request):RedirectResponse
    {
        $user = auth()->user();

        $curriculum = $user->candidate->curriculum;

        $curriculum->update([
            'occupational_profile' => $request->occupational_profile
        ]);

        return redirect()->route('profile.index');
    }

    public function destoy(){
        // $user = auth()->user();
        return view('profile.index', compact('user'));
    }

}
