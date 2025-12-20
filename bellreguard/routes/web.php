<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*-----------------Log In & Logout------------------*/
Route::get('login',[LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class , 'login']);
Route::get('logout', [LoginController::class , 'logout'])->name('logout');

/*-----------------Regisrar-----------------*/
Route::get('registrar',[LoginController::class, 'registrarForm'])->name('registrar');

/* -----------------------Index----------------------- */
Route::get('/', function () {
    return view('index');
})->name('index');

/*------------------Jugadores-----------------------*/
Route::get('/jugadores', function () {
    return view('principales.jugadores');
})->name('jugadores');

/*-----------------Equipos------------------*/
Route::get('/equipos', function () {
    return view('principales.equipos');
})->name('equipos');
