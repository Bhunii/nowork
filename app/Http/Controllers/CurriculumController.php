<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurriculumRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index($id){
    }

    public function create($id){
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

        $user->occupational_profile = $request->occupational_profile;
        $user->save();

        return redirect()->route('profile.index')->with('user', $user);
    }

    public function destoy($id){
        $user = auth()->user();
        return view('profile.index', compact('user'));
    }

}
