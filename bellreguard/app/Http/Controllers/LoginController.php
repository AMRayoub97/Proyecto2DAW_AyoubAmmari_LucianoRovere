<?php

namespace App\Http\Controllers;

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

    public function registrar(Request $request){

        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->correo = $request->input('correo');
        $usuario->password =  Hash::make($request->input('password'));
        $usuario->fecha_nacimiento = $request->input('fecha_nacimiento');
        $usuario->save();

        return redirect()->route('login');
    }
}
