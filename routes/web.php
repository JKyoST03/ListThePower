<?php

use App\Http\Controllers\TopFranquiciaController;
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
});
