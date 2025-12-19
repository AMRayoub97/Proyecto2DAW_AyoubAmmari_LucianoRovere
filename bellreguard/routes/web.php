<?php

use Illuminate\Support\Facades\Route;

/* Index */
Route::get('/', function () {
    return view('index');
})->name('index');

/*Jugadores*/
Route::get('/jugadores', function () {
    return view('principales.jugadores');
})->name('jugadores');
