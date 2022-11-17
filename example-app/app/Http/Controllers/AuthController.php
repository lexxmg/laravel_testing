<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm(Request $request)
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

        //dd($data);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if ($user) {
            //$remember = true
            auth('web')->login($user);

            return redirect(route('home'));
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);

        if (auth('web')->attempt($data)) {
            return redirect(route('home'));
        }
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }
}
