<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Departament;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index():View
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }
    public function create():View
    {
        $departaments = Departament::with('municipalities')->get();
        return view('company.create', compact('departaments'));
    }

public function store(Request $request): RedirectResponse
    {
        $user = auth()->user();
        $recruiter = $user->recruiter;

        Company::create([
            'id_recruiter' => $recruiter->id,
            'name' => $request->name,
            'nit'=> $request->nit,
            'company_name'=> $request->company_name,
            'email'=> $request->email,
            'nature' => $request->nature,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres'=> $request->addres,
            'phone' => $request->phone
        ]);

        return redirect()->route('login')->with('mensaje','Usuario Creado Exitosamente');
    }

    public function edit():View
    {
        $companies = auth()->user();
        return view('company.edit', compact('company'));
    }

    public function show($id):View
    {
        $companies = Company::findOrFail($id);
        return view('company.show', compact('company'));
    }
}
