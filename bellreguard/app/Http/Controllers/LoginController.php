<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrarRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = Usuario::updateOrCreate([
                'correo' => $googleUser->email,
            ], [
                'nombre' => $googleUser->name,
                'password' => bcrypt(str()->random(16)),
                'apellidos' => "-",
                'email_verified_at' => now(), // para production  middleware
            ]);

            // guardar cookie
            Auth::login($user, true);

            request()->session()->regenerate();

            return redirect()->route('index');

        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'problema en Google Login');
        }
    }

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
