<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiasRequest;
use App\Models\Noticia;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\TestStatus\Notice;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::orderBy('fecha', 'DESC')->get();

        $primeraNoticia = Noticia::orderBy('fecha', 'DESC')->first();
        $destacadas = Noticia::limit(3)->get();

        return view('noticias.index')->with('noticias', $noticias)->with('primeraNoticia', $primeraNoticia)
                                     ->with('destacadas', $destacadas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role == 'admin'){
            return view('noticias.create');
        }else{
            return redirect()->route('noticias.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoticiasRequest $request)
    {
        if(Auth::user()->role == 'admin'){
            $data = $request->validated();

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = time() . '_' . $file->getClientOriginalName(); // nombre único
                $file->move(public_path('images/noticias'), $filename);
                $data['foto'] = $filename;
            }else{
                $data['foto'] = 'not1.jpg';
            }

            Noticia::create($data);

            return redirect()->route('noticias.index')
                            ->with('success', 'Noticia añadido correctamente');

        }else{
            return redirect()->route('noticias.index')->with('danger', 'No tienes permiso para acceder esta pagina');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $noticia = Noticia::findOrFail($id);
        $top = Noticia::orderBy('fecha')->first();
        $NoticiasRelacionadas = Noticia::orderBy('fecha')->limit(2)->get();

        return view('noticias.show')->with('noticia', $noticia)->with('NoticiasRelacionadas', $NoticiasRelacionadas)
                                    ->with('top', $top);
    }

    /**
     * mostrar perfil del tutor
     */
    public function showTutor(string $id)
    {
        $tutor = Usuario::findOrFail($id);

        return view('noticias.perfilTutor')->with('tutor', $tutor);
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
