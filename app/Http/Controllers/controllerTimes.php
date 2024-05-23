<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\AlunosTime;
use App\Models\Aluno;

class controllerTimes extends Controller
{
    /*Envia todos os dados para serem listados*/
    public function index() {
        $dados = Time::all();
        return view('Times/listarTimes', compact('dados'));
    }

    /*Ao clicar em um treino, os dados dele serão enviados*/
    public function enviaTimeEscolhido(string $idTime) {
        $dados = Time::find($idTime);
        $alunosTimes = AlunosTime::all();
        $alunos = Aluno::all();
        if (isset($dados))
            return view('Times/listarTimeEscolhido', compact('dados', 'alunosTimes', 'alunos'));
    }

    /*Recebe o id de um dado para ser editado e posteriormente edita ele*/
    public function update (string $idTime, Request $request) {
        $dados = Time::find($idTime);
        if (isset($dados)) {
            $dados->idModalidade = $request->input('idModalidade');
            $dados->genero = $request->input('genero');
            $dados->competicao = $request->input('competicao');
            $dados->save();
            return redirect()->route('inicio');
        }
        return redirect()->route('inicio');
    }

    /*Cadastra um novo dado na tabela*/
    public function store(Request $request) {
        $dados = new Time();
        $dados->idModalidade = $request->input('idModalidade');
        $dados->genero = $request->input('genero');
        $dados->competicao = $request->input('competicao');
        $dados->save();
        return redirect()->route('inicio');
    }

    /*Apaga um dado da tabela*/
    public function destroy(string $idTime) {
        $dados = Time::find($idTime);
        if (isset($dados)) {
            $dados->delete();
            return redirect()->route('indexTime');
        }
    }

    /*Envia os dados para serem editados*/
    public function edit(string $idTime) {
        $dados = Time::find($idTime);
        return view('Times/editarTime', compact('dados'));
    }

    /*Apaga um aluno de um time*/
    public function deleteAlunoTime(string $idAluno, string $idTime) {
        $alunoTime = AlunosTime::where('idAluno', $idAluno)->where('idTime', $idTime);
        if (isset($alunoTime)) {
            $alunoTime->delete();
            return redirect()->route('indexTime');
        }
    }
}
