<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Recruiter;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index():View
    {
        $authuser = auth()->user();
        if($authuser->role_id == '1'){
            $users = User::whereNotIn('role_id', [1,2])->select('doc_num','name','last_name','email','role_id')->get();
            return view('user.index', compact('users'));
        }elseif($authuser->role_id == '2'){
            $users = User::whereNotIn('role_id', [1,2,3])->select('doc_num','name','last_name','email','role_id')->get();
            return view('user.index', compact('users'));
        }else{
            return redirect()->route('profile.index' ,['username' => auth()->user()->user_name]);
        }
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
            'genre' => $request->genre,
            'user_name' => $request->input('user_name'),
            'email' => Str::lower($request->input('email')),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect()->route('login')->with('mensaje','Usuario Creado Exitosamente');
    }

    public function edit_role($doc_num):View
    {
        $user = User::where('doc_num',$doc_num)->select('doc_num','name','last_name','email')->first();
        return view('user.edit_role', compact('user'));
    }

    public function update_role(Request $request,$doc_num):RedirectResponse
    {
        $user = User::where('doc_num', $doc_num)->first();

        $authuser = auth()->user();

        if($authuser->role_id == '1'){

            if($user->role_id == '4'){

                $user->role_id = $request->role_id;
                $user->save();

                Instructor::create([
                    'user_id' => $user->id
                ]);

            return redirect()->route('profile.show', ['username' => auth()->user()->user_name]);
            }
        }
        elseif($authuser->role_id == '2'){

            if($user->role_id == '4'){

                $user->role_id = $request->role_id;
                $user->save();

                Recruiter::create([
                    'user_id' => $user->id
                ]);

            return redirect()->route('profile.show', ['username' => auth()->user()->user_name]);
            }
        }

        return redirect()->route('profile.show', ['username' => auth()->user()->user_name]);
    }

    public function edit_data():View
    {
        $user = auth()->user();
        return view('user.edit_data', compact('user'));
    }

    public function update_data(Request $request):RedirectResponse
    {
        $user = auth()->user();;

        $user->phone = $request->phone;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.index');
    }

    public function destroy($doc_num):RedirectResponse
    {
        $user = User::where('doc_num', $doc_num)->first()->delete();
        return redirect()->route('user.index', compact('user'));
    }

    public function show($doc_num):View
    {
        $user = User::where('doc_num', $doc_num)->first();
        return view('user.show', compact('user'));
    }
}
