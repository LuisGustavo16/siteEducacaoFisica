<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreinoAmistosoController;


Route::get('/', function () {
    return view('index');
}) -> name('inicio');

//////////////////////////////////////////////////////////
/*Rotas para as páginas referentes aos Treinos/Amistosos*/
//////////////////////////////////////////////////////////

Route::get('/CadastrarTreino', function () {
    return view('TreinosAmistosos/cadastrarTreino');
}) -> name('novoTreino');

Route::get('/ListarTreino', function () {
    return view('TreinosAmistosos/listarTreinos');
}) -> name('listarTreinos');

Route::get('/ListarTreinoEscolhido', function () {
    return view('TreinosAmistosos/listarTreinoEscolhido');
}) -> name('listarTreinoEscolhido');


//////////////////////////////////////////////////
/*Rotas para as páginas referentes à Modalidades*/
//////////////////////////////////////////////////
Route::get('/cadastrarModalidade', function () {
    return view('Modalidades/cadastrarModalidade');
}) -> name('novaModalidade');

Route::get('/ListarModalidades', function () {
    return view('Modalidades/listarModalidades');
}) -> name('listarModalidades');

//////////////////////////////////////////////////
/*Rotas para as páginas referentes às Reservas*/
//////////////////////////////////////////////////
Route::get('/listarReservas', function () {
    return view('Reservas/listarReservas');
}) -> name('listarReservas');

//////////////////////////////////////////////////////////
/*Rotas para as páginas referentes aos Times*/
//////////////////////////////////////////////////////////

Route::get('/Cadastrartime', function () {
    return view('Times/cadastrarTime');
}) -> name('novoTime');

////////////////////////////////////////////////////////
/*Rotas do controller da tabela de Treinos e Amistosos*/
////////////////////////////////////////////////////////
Route::get ('/treino_amistosos/listarTreinos', [App\Http\Controllers\controllerTreinoAmistoso::class, 'index']) ->name('indexTreino'); // Rota para exibir
Route::post('/treino_amistosos/cadastrarTreino', [App\Http\Controllers\controllerTreinoAmistoso::class, 'store'])->name('cadastrarTreino'); // Rota para cadastrar
Route::get('/treino_amistosos/selecionado/{idTreino}/{idModalidade}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'enviaTreinoEscolhido']); // Rota que envia o dado para ser vizualizado
Route::post('/treino_amistosos/atualizar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'update']); // Rota para editar
Route::get('/treino_amistosos/editar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'edit']); // Rota que manda o dado a ser editado para o formulário
Route::get('/treino_amistosos/apagar/{idTreino}', [App\Http\Controllers\controllerTreinoAmistoso::class, 'destroy']); // Rota para apagar
Route::get ('/treino_amistosos', [App\Http\Controllers\controllerTreinoAmistoso::class, 'enviaModalidade']) ->name('enviaModalidadesCadastro'); // Rota para exibir

////////////////////////////////////////////////
/*Rotas do controller da tabela de Modalidades*/
////////////////////////////////////////////////
Route::get ('/modalidades', [App\Http\Controllers\controllerModalidades::class, 'index']) ->name('indexModalidade'); // Rota para exibir
Route::post('/modalidades', [App\Http\Controllers\controllerModalidades::class, 'store'])->name('cadastrarModalidade'); // Rota para cadastrar
Route::post('/modalidades/atualizar/{idModalidade}', [App\Http\Controllers\controllerModalidades::class, 'update']); // Rota para editar
Route::get('/modalidades/editar/{idModalidade}', [App\Http\Controllers\controllerModalidades::class, 'edit']); // Rota que manda o dado a ser editado para o formulário
Route::get('/modalidades/apagar/{idModalidade}', [App\Http\Controllers\controllerModalidades::class, 'destroy']); // Rota para apagar

/////////////////////////////////////////////
/*Rotas do controller da tabela de Reservas*/
/////////////////////////////////////////////
Route::get ('/reservas', [App\Http\Controllers\controllerReservas::class, 'index']) ->name('indexReserva'); // Rota para exibir

////////////////////////////////////////////////
/*Rotas do controller da tabela de Times*/
////////////////////////////////////////////////
Route::get ('/times', [App\Http\Controllers\controllerTimes::class, 'index']) ->name('indexTime'); // Rota para exibir
Route::post('/times', [App\Http\Controllers\controllerTimes::class, 'store'])->name('cadastrarTime'); // Rota para cadastrar
Route::get('/times/selecionado/{idTreino}', [App\Http\Controllers\controllerTimes::class, 'enviaTimeEscolhido']); // Rota que envia o dado para ser vizualizado
Route::post('/times/atualizar/{idTime}', [App\Http\Controllers\controllerTimes::class, 'update']); // Rota para editar
Route::get('/times/editar/{idTime}', [App\Http\Controllers\controllerTimes::class, 'edit']); // Rota que manda o dado a ser editado para o formulário
Route::get('/times/apagar/{idTime}', [App\Http\Controllers\controllerTimes::class, 'destroy']); // Rota para apagar
Route::get('/times/retirarAluno/{idAluno}/{idTime}', [App\Http\Controllers\controllerTimes::class, 'deleteAlunoTime']);

