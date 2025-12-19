<?php

use Illuminate\Support\Facades\Route;

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
