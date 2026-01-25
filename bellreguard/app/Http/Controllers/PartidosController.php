<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartidoRequest;
use App\Models\Equipo;
use App\Models\Equipo_V;
use App\Models\Partido;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\Clock\now;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fecha = Carbon::now('Europe/Madrid')->format('Y-m-d');
        $partidos=Partido::get();

        $partidosHoy = Partido::where('fecha', '=', $fecha)->get();
        $partidosProximos = Partido::where('fecha', '>', $fecha)->get();

        return view('partidos.index')
                                    ->with("partidos", $partidos)
                                    ->with('fecha', $fecha)
                                    ->with('partidosHoy',$partidosHoy)
                                    ->with('partidosProximos', $partidosProximos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partidos = Partido::get();
        $equipos=Equipo::get();
        $equiposVisitantes=Equipo_V::get();
        return view('partidos.create')->with("equipos", $equipos)
                                        ->with('partidos', $partidos)
                                        ->with('equiposV', $equiposVisitantes);

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
        $partido = Partido::findOrFail($id);

        return view('partidos.show')->with('partido', $partido);
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
