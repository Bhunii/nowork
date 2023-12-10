<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

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

    public function store(Request $request): RedirectResponse
    {

        Company::create([
            'id_recruiter' => $request->id_recruiter,
            'name' => $request->name,
            'nit'=> $request->nit,
            'company_name'=> $request->company_name,
            'email'=> $request->email,
            'nature' => $request->nature,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'email'=> $request->addres,
            'nature' => $request->phone
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


