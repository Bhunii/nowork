<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Departament;
use App\Models\Vacancy;
use App\Models\Charge;

class VacancyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $authuser = auth()->user();
        if($authuser->role_id == '3'){
            $company = Auth::user()->recruiter->company;
            $vacancies = $company->vacancies;
            return view('vacancy.index',compact('vacancies'));
        }else{
            return redirect()->route('profile.index');
        }
    }
    public function create()
    {
        $authuser = auth()->user();
        if($authuser->role_id == '3'){
            $departaments = Departament::with('municipalities')->get();
            return view('vacancy.create', compact('departaments'));
        }else{
            return redirect()->route('profile.index');
        }
    }
    public function store(Request $request)
    {
        $company = Auth::user()->recruiter->company;

        Vacancy::create([
            'id_company' => $company->id,
            'occupational_profile' => $request->occupational_profile,
            'number_vacancy' => $request->number_vacancy,
            'workday' => $request->workday,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres' => $request->addres,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        $request->validate([
            'id_denomination' => 'required',
            'id_function' => 'required',
            'payment_method' => 'required|in:M,Q',
            'salary' => 'required',
            'type_contract' => 'required|in:I,D',
        ]);

        Charge::create([
            'id_vacancy'=>Vacancy::latest('id')->first()->id,
            'id_denomination' => $request->id_denomination,
            'id_function' => $request->id_function,
            'payment_method' => $request->payment_method,
            'salary' => $request->salary,
            'type_contract' => $request->type_contract
        ]);

        return redirect()->route('vacancy.create');
    }


    public function edit()
    {
        $authuser = auth()->user();

        if($authuser->role_id == '3'){
            $company = Auth::user()->recruiter->company;
            $vacancy = $company->vacancy;
            $departaments = Departament::with('municipalities')->get();
            return view('vacancy.edit', compact('vacancy','departaments'));
        }else{
            return redirect()->route('profile.index');
        }

    }

    public function update(Request $request)
    {
        $company = Auth::user()->recruiter->company;
        $vacancy = $company->vacancy;

        $vacancy->update([
            'occupational_profile' => $request->occupational_profile,
            'number_vacancy' => $request->number_vacancy,
            'workday' => $request->workday,
            'id_departament' => $request->id_departament,
            'id_municipality' => $request->id_municipality,
            'addres' => $request->addres,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

    return redirect()->route('vacancy.index');
    }

    public function destroy($id)
    {
        $vacancy=Vacancy::find($id);
        if ($vacancy){
            $vacancy->delete();
            return redirect()->route('vacancy.index')->with('succes','vacancy delete');
        }else{
            return redirect()->route('vacancy.index')->with('mistake','vacancy not found');

        }
    }
}
