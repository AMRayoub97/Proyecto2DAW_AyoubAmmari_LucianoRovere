<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartidoRequest;
use App\Models\Equipo;
use App\Models\Partido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partidos=Partido::get();
        return view('partidos.index')->with("partidos", $partidos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos=Equipo::get();
        return view('partidos.create')->with("equipos", $equipos);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartidoRequest $request)
    {
        if(Auth::user()->role == 'admin'){
            $data = $request->validated();    

            Partido::create($data);
               return redirect()->route('partidos.index')
                            ->with('success', 'Partido añadido');
        }else{
            return redirect()->route('partidos.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
