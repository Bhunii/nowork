<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Company;
use App\Models\Departament;


class CompanyController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index():View
    {
        $authuser = auth()->user();
        if($authuser->role_id == '3'){
            $recruiter = Auth::user()->recruiter;
            $company = $recruiter->company;
            return view('company.index', compact('company'));
        }else{
            return redirect()->route('profile.index');
        }
    }
    public function create():View
    {
        $authuser = auth()->user();
        if($authuser->role_id == '3'){
            $departaments = Departament::with('municipalities')->get();
            return view('company.create', compact('departaments'));
        }else{
            return redirect()->route('profile.index');
        }
    }

public function store(Request $request): RedirectResponse
    {
        $recruiter = Auth::user()->recruiter;

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

        return redirect()->route('company.index')->with('mensaje','Empresa Creado');
    }

    public function edit():View
    {
        $authuser = auth()->user();

        if($authuser->role_id == '3'){
            $recruiter = Auth::user()->recruiter;
            $company = $recruiter->company;
            $departaments = Departament::with('municipalities')->get();
            return view('company.edit', compact('company','departaments'));
        }else{
            return redirect()->route('profile.index');
        }
    }

    public function update(Request $request){

        $recruiter = Auth::user()->recruiter;
        $company = $recruiter->company;

        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->id_departament = $request->id_departament;
        $company->id_municipality = $request->id_municipality;
        $company->addres = $request->addres;

        $company->save();

        return redirect()->route('company.index');
    }

    public function show(){
    }
}
