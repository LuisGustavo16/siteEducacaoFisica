<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreinoAmistosoController;

/*Rotas para as páginas referentes aos Treinos/Amistosos*/
Route::get('/', function () {
    return view('index');
}) -> name('inicio');

Route::get('/CadastrarTreino', function () {
    return view('TreinosAmistosos/cadastrarTreino');
}) -> name('novoTreino');

Route::get('/Listar', function () {
    return view('TreinosAmistosos/listarTreinos');
}) -> name('listarTreinos');

Route::get('/ListarEscolhido', function () {
    return view('TreinosAmistosos/listarTreinoEscolhido');
}) -> name('listarTreinoEscolhido');

/*Rotas para as páginas referentes à Modalidades*/
Route::get('/cadastrarModalidade', function () {
    return view('Modalidades/cadastrarModalidade');
}) -> name('novaModalidade');

/*Rotas do controller da tabela de Treinos e Amistosos*/
Route::get ('/treino_amistosos', [App\Http\Controllers\controllerTreinoAmistoso::class, 'index']) ->name('indexTreino'); // Rota para exibir
Route::post('/treino_amistosos', [App\Http\Controllers\controllerTreinoAmistoso::class, 'store'])->name('cadastrarTreino'); // Rota para cadastrar
Route::get('/treino_amistosos/selecionado/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'enviaDadoEscolhido']); // Rota que envia o dado para ser vizualizado
Route::post('/treino_amistosos/atualizar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'update']); // Rota para editar
Route::get('/treino_amistosos/editar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'edit']); // Rota que manda o dado a ser editado para o formulário
Route::get('/treino_amistosos/apagar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'destroy']); // Rota para apagar

/*Rotas do controller da tabela de Modalidades*/
Route::get ('/modalidades', [App\Http\Controllers\controllerModalidades::class, 'index']) ->name('indexModalidade'); // Rota para exibir
Route::post('/modalidades', [App\Http\Controllers\controllerModalidades::class, 'store'])->name('cadastrarModalidade'); // Rota para cadastrar
Route::post('/modalidades/atualizar/{idModalidade}', [App\Http\Controllers\controllerModalidades::class, 'update']); // Rota para editar
Route::get('/modalidades/editar/{idModalidade}', [App\Http\Controllers\controllerModalidades::class, 'edit']); // Rota que manda o dado a ser editado para o formulário
Route::get('/modalidades/apagar/{idModalidade}', [App\Http\Controllers\controllerModalidades::class, 'destroy']); // Rota para apagar