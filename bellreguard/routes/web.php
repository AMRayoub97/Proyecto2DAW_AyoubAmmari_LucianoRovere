<?php

use Illuminate\Support\Facades\Route;

/*-----------------Log In------------------*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

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
