<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestInputController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->flash();
        $input = $request->all();
        $old = $request->old();

        return view('input', ['input' => $input, 'old' => $old]);
    }
}
