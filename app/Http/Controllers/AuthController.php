<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'You have successfully registered');
    }
    
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials))
        {
            return redirect('/home')->with('success', 'You have successfully logged-in.');
        }
        return back()->with('error', 'Wrong email or password!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
    

}
