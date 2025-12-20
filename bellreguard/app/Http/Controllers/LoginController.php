<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }
    public function login(Request $request){
        $credenciales = $request->only('login', 'password');

        if(Auth::attempt($credenciales)){
            return redirect()->intended(route('index'));
        }else{
            return back()->withErrors(([
                'errorAcceso' => 'Usuario i/o contrasena incorreccto'
            ]))->onlyInput('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
