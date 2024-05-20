<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreinoAmistosoController;

Route::get('/', function () {
    return view('index');
}) -> name('inicio');

Route::get('/treino', function () {
    return view('novoTreinoAmistoso');
}) -> name('treino');

Route::post('/treino_amistosos', [App\Http\Controllers\controllerTreinoAmistoso::class, 'store'])->name('adicionaTreinoAmistoso');
