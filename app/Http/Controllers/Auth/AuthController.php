<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only(['email','password']);
        $remember_me = $request->has('remember_me');

        if ( auth()->attempt($credentials, $remember_me) ) {

            return redirect()->route('home')->with('success', 'Welcome!!');
        }

        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home')->with('success', 'Bye bye!');
    }

}
