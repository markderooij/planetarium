<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemController;

Route::get('/', [PlanetController::class, 'index']);
Route::get('/{planet}', [PlanetController::class, 'show']);
Route::get('/solar-systems', [SolarSystemController::class, 'index']);