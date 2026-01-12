<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use App\Http\Requests\JugadorRequest;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::orderBy('puntuacion' , 'DESC')->paginate(6);

        return view('jugadores.index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JugadorRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName(); // nombre único
            $file->move(public_path('images/jugadores'), $filename);
            $data['foto'] = $filename;
        }

        Jugador::create($data);

        return redirect()->route('jugadores.index')
                         ->with('success', 'Jugador añadido correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jugador = Jugador::findOrFail($id);

        return view('jugadores.show')->with('jugador', $jugador);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jugador = Jugador::findOrFail($id);

        return view('jugadores.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JugadorRequest $request, string $id)
    {
        $jugador = Jugador::findOrFail($id);

        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName(); // nombre único
            $file->move(public_path('images/jugadores'), $filename);
            $data['foto'] = $filename;
        }

        $jugador->update($data);

        return redirect()->route('jugadores.index')->with('success', 'El jugador ' . $jugador->nombre . ' ha sido editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jugador::findOrFail($id)->delete();
        
        return redirect()->route('jugadores.index')
                        ->with('success', 'Se ha eliminado el jugador correctamente');
    }
}
