<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use App\Http\Requests\JugadorRequest;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'entrenador'){
            return view('jugadores.create');
        }else{
            return redirect()->route('jugadores.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JugadorRequest $request)
    {

        if(Auth::user()->role == 'admin'  || Auth::user()->role == 'entrenador'){
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
        }else{
            return redirect()->route('jugadores.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
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
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'entrenador'){
            $jugador = Jugador::findOrFail($id);

            return view('jugadores.edit', compact('jugador'));
        }else{
            return redirect()->route('jugadores.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JugadorRequest $request, string $id)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'entrenador'){
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
        }else{
            return redirect()->route('jugadores.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'entrenador'){
            Jugador::findOrFail($id)->delete();

            return redirect()->route('jugadores.index')
                            ->with('success', 'Se ha eliminado el jugador correctamente');
        }else{
            return redirect()->route('jugadores.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }
}
