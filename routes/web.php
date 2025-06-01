<?php

use App\Http\Controllers\Tops\TopFranquiciaController;
use App\Http\Controllers\Tops\TopGlobalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home-page');

// AUTH VERIFICATION // 
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    // DASHHBOARD DEL USUARIO //
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// TOPS POR FRANQUICIAS //
Route::prefix('/tops-franquicias')->group(function () {
    Route::get('/', [TopFranquiciaController::class, 'index'])->name('tops-franquicias.index');
    Route::get('/franchise/{id}', [TopFranquiciaController::class, 'indexFranchise'])->name('tops-franquicias.franchise')->middleware('exist.franchise');
});

// TOPS GLOBAL //
Route::prefix('/tops-global')->group(function () {
    Route::get('/', [TopGlobalController::class, 'index'])->name('top-global.index');
});