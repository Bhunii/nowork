<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Departament;
use App\Models\Instructor;
use Illuminate\Support\Str;


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
    }

    public function store(){
    }

    public function edit():View
    {
        $user = auth()->user();
        $departaments = Departament::with('municipalities')->get();

        return view('instructor.edit', compact('user','departaments'));
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

        $user->instructor->update([
            'profession' => $request->profession,
            'speciality' => $request->speciality
        ]);

        return redirect()->route('profile.index')->with('mensaje','Datos Actualizados');
    }

}
