<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurriculumRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = auth()->user();

        $curriculum = $user->candidate->curriculum;

        return view('curriculum.index', compact('user','curriculum'));
    }

    public function create(){
        return view('curriculum.create');
    }

    public function store(Request $request){

        return redirect()->route('profile.index');
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
