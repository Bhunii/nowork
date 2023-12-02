<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    public function index():View
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create():View
    {
        return view('user.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {

        User::create([
            'doc_type' => $request->doc_type,
            'doc_num' => Str::upper($request->input('doc_num')),
            'name' => Str::upper($request->input('name')),
            'last_name' => Str::upper($request->input('last_name')),
            'phone' => $request->input('phone'),
            'user_name' => Str::lower($request->input('user_name')),
            'email' => Str::lower($request->input('email')),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect()->route('user.index')->with('Usuario Creado Exitosamente');
    }

    public function edit($id):View
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request,$id):RedirectResponse
    {
        $user = User::findOrFail($id);

        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('user.index');
    }

    public function edit_data($id):View
    {
        $user = User::findOrFail($id);
        return view('user.edit_data', compact('user'));
    }

    public function update_data(Request $request,$id):RedirectResponse
    {
        $user = User::findOrFail($id);

        $user->phone = $request->phone;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy($id):RedirectResponse
    {
        ($user = User::findOrFail($id))->delete();
        return redirect()->route('user.index', compact('user'));
    }

    public function show($id):View
    {
        $user = User::findOrFail($id);      
        return view('user.show', compact('user'));
    }
}
