<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Charge;
use App\Models\Departament;



class VacancyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    $vacancies=Vacancy::all();
    return view('vacancy.index',compact('vacancies'));
    }
    public function create()
    {
        $departaments = Departament::with('municipalities')->get();
        return view('vacancy.create', compact('departaments'));
    }
    public function store(Request $request)
    {

    $vacancy = Vacancy::create([
        'id_company' => $request->id_company,
        'occupational_profile' => $request->occupational_profile,
        'number_vacancy' => $request->number_vacancy,
        'workday' => $request->workday,
        'id_departament' => $request->id_departament,
        'id_municipality' => $request->id_municipality,
        'addres' => $request->addres,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
    ]);

    Charge::create([
        'id_vacancy'=>Vacancy::latest('id')->first()->id,
        'id_denomination' => $request->id_denomination,
        'id_function' => $request->id_function,
        'payment_method' => $request->payment_method,
        'salary' => $request->salary,
        'type_contract' => $request->type_contract,
    ]);

    return redirect()->route('vacancy.create');
    }


    public function edit(Vacancy $vacancy)
    {
        return view('vacancy.edit',compact('vacancy'));

    }
    public function update(Request $request, Vacancy $vacancy)
{
    $vacancy->update([
        'occupational_profile' => $request->occupational_profile,
        'number_vacancy' => $request->number_vacancy,
        'workday' => $request->workday,
        'id_departament' => $request->id_departament,
        'id_municipality' => $request->id_municipality,
        'addres' => $request->addres,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
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
