<?php
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PayModeController;
use App\Http\Controllers\Api\ProductController;
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
Route::apiResource('customers', CustomerController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('paymodes', PayModeController::class);
Route::apiResource('products', ProductController::class);