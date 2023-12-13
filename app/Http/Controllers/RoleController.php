<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }
    public function create(){
        return view('role.create');
    }
    public function store(Request $request){

        Role::create([
            'role_name'=> $request->role_name,
            'description'=> $request->description
        ]);

        return redirect()->route('role.index');
    }
}
