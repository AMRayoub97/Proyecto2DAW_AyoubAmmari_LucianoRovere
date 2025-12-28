<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\LoginController;
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
Route::get('/jugadores', [JugadoresController::class, 'index'])->name('jugadores');

/*-----------------Equipos------------------*/
Route::get('/equipos', function () {
    return view('principales.equipos');
})->name('equipos');

/*---------Perfile ----------------*/
Route::get('/perfil/{id}', function($id) {
    return view('principales.perfil')->with(['id' => $id]);
})->where('id', "[0-9]+")
->name('perfil');

/*-----------------Tienda------------*/
Route::get('/tienda', function(){
    return view('principales.tienda');
})->name('tienda');

Route::get('/tienda/{id}', function ($id) {
    return view('principales.producto', compact('id'));
})->name('producto');

