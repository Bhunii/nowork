<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($username = null)
    {
        if ($username) {
            return view('profile.index');
        } else {
            return redirect()->route('profile.index', ['username' => auth()->user()->user_name]);
        }
    }
}


