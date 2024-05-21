<?php

namespace App\Http\Controllers;

use App\Models\TreinoAmistoso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllerTreinoAmistoso extends Controller
{
    /*Envia todos os dados para serem listados*/
    public function index() {
        $dados = TreinoAmistoso::all();
        return view('TreinosAmistosos/listarTreinos', compact('dados'));
    }

    /*Ao clicar em um treino, os dados dele serão enviados*/
    public function enviaDadoEscolhido(string $idTreino) {
        $dados = TreinoAmistoso::find($idTreino);
        if (isset($dados))
            return view('TreinosAmistosos/listarTreinoEscolhido', compact('dados'));
    }

    /*Recebe o id de um dado para ser editado e posteriormente edita ele*/
    public function update (string $idTreino, Request $request) {
        $dados = TreinoAmistoso::find($idTreino);
        if (isset($dados)) {
            $dados->idModalidade = $request->input('idModalidade');
            $dados->dia = $request->input('dia');
            $dados->horario = $request->input('horario');
            $dados->genero = $request->input('genero');
            $dados->publico = $request->input('publico');
            $dados->local = $request->input('local');
            $dados->responsavel = $request->input('responsavel');
            $dados->observacao = $request->input('observacao');
            $dados->save();
            return redirect('inicio');
        }
        return redirect('inicio');
    }

    /*Cadastra um novo dado na tabela*/
    public function store(Request $request) {
        $dados = new TreinoAmistoso();
        $dados->idModalidade = $request->input('idModalidade');
        $dados->dia = $request->input('dia');
        $dados->horario = $request->input('horario');
        $dados->genero = $request->input('genero');
        $dados->publico = $request->input('publico');
        $dados->local = $request->input('local');
        $dados->responsavel = $request->input('responsavel');
        $dados->observacao = $request->input('observacao');
        $dados->save();
        return redirect()->route('inicio');
    }

    /*Apaga um dado da tabela*/
    public function destroy(string $id) {
        $dados = TreinoAmistoso::find($id);
        if (isset($dados)) {
            $dados->delete();
            return redirect()->route('inicio');
        }
    }

    /*Envia os dados para serem editados*/
    public function edit(string $idTreino) {
        $dados = TreinoAmistoso::find($idTreino);
        if (isset($dados))
            return view('TreinosAmistosos/editarTreino', compact('dados'));
    }
}
