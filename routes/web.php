<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreinoAmistosoController;

Route::get('/', function () {
    return view('index');
}) -> name('inicio');

Route::get('/treino', function () {
    return view('TreinosAmistosos/novoTreino');
}) -> name('novoTreino');

Route::get('/listar', function () {
    return view('TreinosAmistosos/listarTreinos');
}) -> name('listarTreinos');

Route::get('/listarEscolhido', function () {
    return view('TreinosAmistosos/listarTreinoEscolhido');
}) -> name('listarTreinoEscolhido');


/*Rotas do controller da tabela de Treinos e Amistosos*/
Route::get ('/treino_amistosos', [App\Http\Controllers\controllerTreinoAmistoso::class, 'index']) ->name('indexTreino'); // Rota para exibir
Route::post('/treino_amistosos', [App\Http\Controllers\controllerTreinoAmistoso::class, 'store'])->name('cadastrarTreino'); // Rota para cadastrar
Route::get('/treino_amistosos/selecionado/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'enviaDadoEscolhido']); // Rota que envia o dado para ser vizualizad
Route::post('/treino_amistosos/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'update']); // Rota para editar
Route::get('/treino_amistosos/editar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'edit']); // Rota que manda o dado a ser editado para o formulário
Route::get('/treino_amistosos/apagar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'destroy']); // Rota para apagar