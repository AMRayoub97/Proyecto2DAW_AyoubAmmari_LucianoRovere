<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipoEditRequest;
use App\Http\Requests\EquipoRequest;
use App\Models\Equipo;
use App\Models\Equipo_V;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->filled('categoria')) {
            $equipos = Equipo::where('categoria', $request->categoria)->paginate(6);
        }else{
            $equipos = Equipo::paginate(6);
        }

        $categor = ['Junior', 'Senior', 'Cadete', 'Infantil', 'Alevín', 'Benjamín', 'Juvenil', 'Prebenjamín'];

        $equiposV = Equipo_V::paginate(6);

        return view('principales.equipos')->with('equipos', $equipos)->with('equiposV', $equiposV)->with('categor', $categor);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role == 'admin'){
            return view('equipos.create');
        }else{
            return redirect()->route('equipos.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipoRequest $request)
    {
        if(Auth::user()->role == 'admin'){
            $data = $request->validated();

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/equipos'), $filename);
                $data['foto'] = $filename;
            }else {
                $data['foto'] = 'logo.png';
            }

            Equipo::create($data);

            return redirect()->route('equipos.index')->with('success', 'Equipo creado correctamente.');
        }else{
            return redirect()->route('equipos.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $equipo = Equipo::findOrFail($id);

        return view('equipos.show')->with('equipo', $equipo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(Auth::user()->role == 'admin'){
            $equipo = Equipo::findOrFail($id);

            return view('equipos.edit', compact('equipo'));
        }else{
            return redirect()->route('equipos.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipoEditRequest $request, string $id)
    {
        if(Auth::user()->role == 'admin'){
            $equipo = Equipo::findOrFail($id);

            $data = $request->validated();

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '_' . $file->getClientOriginalName(); // nombre único
                $file->move(public_path('images/equipos'), $filename);
                $data['foto'] = $filename;
            }

            $equipo->update($data);

            return redirect()->route('equipos.index')->with('success', 'El equipo ' . $equipo->nombre . ' ha sido editado correctamente');

        }else{
            return redirect()->route('equipos.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Auth::user()->role == 'admin'){
            Equipo::findOrFail($id)->delete();
            return redirect()->route('equipos.index')
                            ->with('success', 'Se ha eliminado el equipo correctamente');
            }else{
            return redirect()->route('equipos.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

}
