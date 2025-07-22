<?php

use App\Http\Controllers\ProdottoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('prodotti', ProdottoController::class)->names([
    'index' => 'prodotti.lista',
    'create' => 'prodotti.crea',
    'store' => 'prodotti.salva',
    'show' => 'prodotti.visualizza',
    'edit' => 'prodotti.modifica',
    'update' => 'prodotti.aggiorna',
    'destroy' => 'prodotti.elimina',
]);
