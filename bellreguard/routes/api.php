<?php

use App\Http\Controllers\Api\EquipoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('equiposAPi', EquipoController::class);
