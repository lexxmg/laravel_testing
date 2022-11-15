<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginShowform()
    {
        return view('auth.login');
    }
}
