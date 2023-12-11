<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charge;


class ChargeController extends Controller
{
    public function index()
    {
    $charges=Charge::all();
    return view('charge.index',compact('charges'));
    }
    public function create()
    {
        return view('charge.create');
    }
    public function store(Request $request)
    {
        $charge = new Charge;
        $charge->id_denomination=$request->id_denomination;
        $charge->id_function=$request->id_function;
        $charge->payment_method=$request->payment_method;
        $charge->salary=$request->salary;
        $charge->type_contract=$request->type_contract;
        $charge->save();
        
        return rendirect()->route('charge.create');

    }

    public function edit(Charge $charge)
    {
        return view('charge.edit',compact('charge'));

    }
    public function update(Request $request,Charge $charge)
    {
        $charge->update($request->all());
        return redirect()->route('charge.index');
    }
    public function destroy($id)
    {
        $charge=Charge::find($id);
        if ($charge){
            $charge->delete();
            return redirect()->route('charge.index')->with('succes','charge delete');
        }else{
            return redirect()->route('charge.index')->with('mistake','charge not found');

        }
    }

}