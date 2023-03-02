<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->tipo ?? 'cliente';
        return view('login', compact('tipo'));
    }
}
