<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('register.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'login_email' => ['required','email'],
            'login_password' => ['required'],
        ]);
        $credentials['email'] = $request->login_email;
        $credentials['password'] = $request->login_password;
        unset($credentials['login_password']);
        unset($credentials['login_email']);
        // dump($credentials);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/');

        }else{
             return back()->with('errorLogin','Email or Password Invalid')->withInput();
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function registerStore(Request $request){
        $validatedData = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'register_email' => ['required','email','unique:users,email'],
            'register_password' => ['required'],
        ]);
        unset($validatedData['register_password']);
        unset($validatedData['register_email']);
        $validatedData['email'] = $request->register_email;
        $validatedData['remember_token'] = Str::random(10);
        $validatedData['password'] = Hash::make($request->register_password);
        // dump($validatedData);
        User::create($validatedData);
        return redirect('/login');
    }
}
