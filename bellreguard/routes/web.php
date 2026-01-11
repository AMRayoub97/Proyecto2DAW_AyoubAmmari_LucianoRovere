<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


/* -----------------------Index----------------------- */
Route::get('/', [PaginasController::class, 'index'])->name('index');

/*-----------------Log In & Logout------------------*/
Route::get('login',[LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class , 'login']);
Route::get('logout', [LoginController::class , 'logout'])->name('logout');

/*-----------------Regisrar-----------------*/
Route::get('registrar',[LoginController::class, 'registrarForm'])->name('registrar');
Route::post('registrar', [LoginController::class , 'registrar']);


/*------------------Jugadores-----------------------*/
Route::get('/jugadores', [JugadoresController::class, 'index'])->name('jugadores.index');
Route::get('/jugadores/{id}', [JugadoresController::class, 'show'])->name('jugadores.show');

/*-----------Auth------------*/
Route::middleware(['auth'])->group(function () {
    /*------------------Jugadores-----------------------*/
    Route::resource('jugadores', JugadoresController::class)->except(['index','show']);

    Route::resource('equipos', EquipoController::class)->except(['index','show']);

    /*-----------------Perfil------------------*/
    Route::get('perfile/{id}',[UsuarioController::class, 'show'])->name('perfil');
});


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
Route::get('noticias',function(){
    return view('noticias.index');
})->name('noticias');

Route::get('noticias/{tst}',function(){
    return view('noticias.show');
})->name('noticia');


/*-----------EVENTOS------------*/
Route::get('eventos', [EventoController::class, 'index'])->name('eventos.index');
