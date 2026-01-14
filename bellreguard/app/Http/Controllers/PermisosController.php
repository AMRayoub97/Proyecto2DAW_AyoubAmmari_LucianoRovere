<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermisosEditRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $usuarios = Usuario::get();
            return view('permisos.index')->with('usuarios', $usuarios);
        }else{
            return redirect()->route('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         if(Auth::user()->role == 'admin'){
            $usuario = Usuario::findOrFail($id);
            return view('permisos.edit')->with('usuario', $usuario);
        }else{
            return redirect()->route('index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermisosEditRequest $request, string $id)
    {
        if(Auth::user()->role == 'admin'){

            $usuario = Usuario::findOrFail($id);

            $data = $request->validated();

            $usuario->update($data);

            return redirect()->route('permisos.index')->with('success', 'has cambiado su role');

        }else{
            return redirect()->route('index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
