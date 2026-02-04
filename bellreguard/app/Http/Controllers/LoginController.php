<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrarRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credenciales = $request->only('correo', 'password');

        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect()->intended(route('index'));
        }else{
            return back()->withErrors(([
                'errorAcceso' => 'Usuario i/o contrasena incorreccto'
            ]))->onlyInput('correo');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function registrarForm(){
        return view('auth.registrar');
    }

    public function registrar(RegistrarRequest $request){

        $usuario = $request->validated();

        $usuario->password = Hash::make($request->input('password'));

        Usuario::create($usuario);

        return redirect()->route('login');
    }
}
