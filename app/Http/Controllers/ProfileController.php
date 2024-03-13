<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username = null)
    {
        if ($username) {
            return view('profile.show');
        } else {
            return redirect()->route('profile.show', ['username' => auth()->user()->user_name]);
        }
    }
}


