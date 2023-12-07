<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller

{
    public function index():View
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }
    public function create():View
    {
        return view('company.create');
    }

    public function store(CompanyRequest $request): RedirectResponse
    {

        Company::create([
            'id_recruiter' => $request->id_recruiter,
            'name' => $name,
            'nit'=> $nit,
            'company_name'=> $company_name,
            'email'=> $email,
            'nature' => $nature,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'email'=> $addres,
            'nature' => $phone
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


