<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Departament;
use App\Models\Vacancy;
use App\Models\Charge;
use App\Models\Occupation;

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
            if($company == null){
                return redirect()->route('company.index')->with('mensaje','Debes crear la empresa primero');
            } else{
                $vacancies = $company->vacancies;
                return view('vacancy.index',compact('vacancies'));
            }
        }else{
            return redirect()->route('profile.show' ,['username' => auth()->user()->user_name]);
        }
    }
    public function create()
    {
        $authuser = auth()->user();
        if($authuser->role_id == '3'){
            // $occupations = Occupation::with(['functions' => function ($query){
            //     $query->select('code_occupation','code','description');
            // },'denominations'])->get(['code_occupation','name']);
            // dd($occupations);
            $occupations = Occupation::with(['functions','denominations'])->get();
            $departaments = Departament::with('municipalities')->get();
            return view('vacancy.create', compact('departaments','occupations'));
        }else{
            return redirect()->route('profile.show' ,['username' => auth()->user()->user_name]);
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

        Charge::create([
            'id_vacancy'=>Vacancy::latest('id')->first()->id,
            'id_denomination' => $request->id_denomination,
            'functions' => $request->functions,
            'payment_method' => $request->payment_method,
            'salary' => $request->salary,
            'type_contract' => $request->type_contract
        ]);

        return redirect()->route('vacancy.create');
    }


    public function edit(){
    }

    public function update(){
    }

    public function destroy($id)
    {
        $vacancy=Vacancy::findOrFail($id);
        $vacancy->delete();

        return redirect()->route('vacancy.index');
    }
}
