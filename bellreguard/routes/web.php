<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*-----------------Log In & Logout------------------*/
Route::get('login',[LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class , 'login']);
Route::get('logout', [LoginController::class , 'logout'])->name('logout');

/*-----------------Regisrar-----------------*/
Route::get('registrar',[LoginController::class, 'registrarForm'])->name('registrar');
Route::post('registrar', [LoginController::class , 'registrar']);

/* -----------------------Index----------------------- */
Route::get('/', function () {
    return view('index');
})->name('index');

/*------------------Jugadores-----------------------*/
Route::get('/jugadores', [JugadoresController::class, 'index'])->name('jugadores.index');
Route::get('/jugadores/{id}', [JugadoresController::class, 'show'])->name('jugadores.show');

/*-----------Auth------------*/
Route::middleware(['auth'])->group(function () {
    /*------------------Jugadores-----------------------*/
    Route::resource('jugadores', JugadoresController::class)->except(['index','show']);

    /*-----------------Equipos------------------*/
    Route::get('perfile/{id}',[UsuarioController::class, 'show'])->name('perfil');
});

/*-----------------Equipos------------------*/
Route::get('/equipos', function () {
    return view('principales.equipos');
})->name('equipos');


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
