<?php

use App\Http\Controllers\PieceController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SpectacleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('api')->group(function () {
    Route::resource('salles', SalleController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('pieces', PieceController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('spectacles', SpectacleController::class);
});