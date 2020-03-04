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

    public function users(Request $request)
    {
        $uri = $request->path();
        $method = $request->method();

        $users = User::all();
        return view('user.users', ['users' => $users, 'uri' => $uri, 'method' => $method]);
    }
}
