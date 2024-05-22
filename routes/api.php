<?php
use App\Http\Controllers\Api\ComunaController;
use App\Http\Controllers\Api\MunicipioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas');
Route::apiResource('comunas', ComunaController::class);
Route::apiResource('municipios', MunicipioController::class);
