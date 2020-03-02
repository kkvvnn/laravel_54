<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id = 1)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
