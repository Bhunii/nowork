<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::with('candidate')->find(auth()->id());
        return view('profile.index', compact('user'));
    }
}
