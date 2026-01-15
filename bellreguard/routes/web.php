<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


/* -----------------------Index----------------------- */
Route::get('/', [PaginasController::class, 'index'])->name('index');

/*-----------------Log In & Logout------------------*/
Route::get('login',[LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class , 'login']);
Route::get('logout', [LoginController::class , 'logout'])->name('logout')->middleware('auth');

/*-----------------Regisrar-----------------*/
Route::get('registrar',[LoginController::class, 'registrarForm'])->name('registrar');
Route::post('registrar', [LoginController::class , 'registrar']);


/*-----------Auth------------*/
Route::middleware(['auth'])->group(function () {
    /*------------------Jugadores-----------------------*/
    Route::resource('jugadores', JugadoresController::class)->except(['index','show']);

    Route::resource('equipos', EquipoController::class)->except(['index','show']);

    /*-----------------Perfil------------------*/
    Route::resource('perfil', UsuarioController::class);

    /*----------------Permisos------------*/
    Route::resource('permisos', PermisosController::class);

    /*----------------Partidos------------*/
    Route::resource('partidos', PartidosController::class)->except(['index','show']);

    /*--------------Noticias-------------*/
    Route::resource('noticias', NoticiaController::class)->except(['index','show']);

});

/*------------------Jugadores-----------------------*/
Route::get('/jugadores', [JugadoresController::class, 'index'])->name('jugadores.index');
Route::get('/jugadores/{id}', [JugadoresController::class, 'show'])->name('jugadores.show');

/*-----------------Equipos------------------*/
Route::get('equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('equipos/{id}', [EquipoController::class, 'show'])->name('equipos.show');


/*-----------------Tienda------------*/
Route::get('/tienda', function(){
    return view('principales.tienda');
})->name('tienda');

Route::get('/tienda/{id}', function ($id) {
    return view('principales.producto', compact('id'));
})->name('producto');

/*--------------COOKIES----------*/
Route::get('cookies', function(){
    return view('partials.cookies');
})->name('cookies');

/*---------NOTICIAS-------*/
Route::get('noticias',[NoticiaController::class, 'index'])->name('noticias.index');
Route::get('noticias/{tst}',[NoticiaController::class, 'show'])->name('noticias.show');

Route::get('noticias/tutor/{tst}',[NoticiaController::class, 'showTutor'])->name('noticias.tutor');


/*-----------EVENTOS------------*/
Route::get('eventos', [EventoController::class, 'index'])->name('eventos.index');

/*-----------PARTIDOS------------*/
Route::get('partidos', [PartidosController::class, 'index'])->name('partidos.index');

