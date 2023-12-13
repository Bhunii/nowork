<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $instructors = Instructor::all();
        return view('instructor.index', compact('instructors'));
    }

    public function create(){
        $user = auth()->user();
        return view('instructor.create', compact('user'));
    }

    public function store(Request $request,$id){
        $user = User::findOrFail($id);

        Instructor::create([
            'user_id'=> $id,
            'profession'=> $request->profession,
            'speciality'=> $request->speciality
        ]);

        return redirect()->route('instructor.index');
    }

    public function edit($id){
        $instructor = Instructor::findOrFail($id);
        return view('instructor.edit', compact('instructor'));
    }

    public function update(Request $request,$id){
        $instructor = Instructor::findOrFail($id);

        $instructor->profession = $request->profession;
        $instructor->speciality = $request->speciality;
        $instructor->save();

        return redirect()->route('instructor.index');
    }

}
