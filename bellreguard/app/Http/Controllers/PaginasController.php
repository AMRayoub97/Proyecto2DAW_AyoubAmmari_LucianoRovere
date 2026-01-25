<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Noticia;
use App\Models\Partido;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fecha = Carbon::now('Europe/Madrid')->format('Y-m-d');

        $noticias = Noticia::orderBy('fecha')->limit(4)->get();
        $eventos = Evento::orderBy('fecha', 'DESC')->limit(4)->get();
        $partidos = Partido::orderBy('fecha', 'ASC')->limit(9)->get();

        return view('index')->with('eventos', $eventos)->with('noticias', $noticias)
                            ->with('partidos', $partidos);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
