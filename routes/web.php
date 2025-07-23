<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Rotte esistenti per il profilo tramite ProfileController
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotta nuova per /profilo semplice (esercizio)
    Route::get('/profilo', function () {
        return 'Benvenuto nella pagina del tuo profilo autenticato!';
    })->name('profilo');
});

// Rotte di autenticazione Breeze (login, register, ecc.)
require __DIR__.'/auth.php';
