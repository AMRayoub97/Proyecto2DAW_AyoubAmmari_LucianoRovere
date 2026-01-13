<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        $usuario = Auth::user();

        return view('principales.perfil', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('principales.EditPerfil', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioRequest $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);

        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName(); // nombre único
            $file->move(public_path('images/usuarios'), $filename);
            $data['foto'] = $filename;
        }

        $usuario->update($data);

        return redirect()->route('perfil.show', $id)->with('success', 'ha editado su perfil correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
