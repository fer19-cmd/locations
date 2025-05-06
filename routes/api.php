<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LocationController;
use App\Http\Controllers\Api\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí se registran las rutas de la API. Estas rutas están dentro del grupo
| de middleware "api" y se agrupan automáticamente por Laravel.
|
*/

// Rutas protegidas con Sanctum
Route::apiResource('V1/locations', LocationController::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');

// Ruta pública de login
Route::post('login', [LoginController::class, 'login']);
