<?php
    $aux = false;
    $classe = 'branco';
?>
@extends ('cabecalho')
@section('content')
<div class="fundo">
    <div class="tabela">
        <table>
            <thead>
                <tr class="amarelo">
                    <th>Modalidade</th>
                    <th>Gênero</th>
                    <th>Competição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$dados->idModalidade}}</td>
                    <td>{{$dados->genero}}</td>
                    <td>{{$dados->competicao}}</td>
                </tr>
            </tbody>
        </table>

        <div class="addAlunoDiv">
            <a href="">
                <h1>ADICIONAR ALUNO AO TIME</h1>
            </a>
        </div>

        <table>
            <caption>ALUNOS</caption>
            <thead>
                <tr class="amarelo">
                    <th>Nome</th>
                    <th>Turma</th>
                    <th>Opções</th>
                </tr>
            </thead>
            @foreach ($alunosTimes as $alunoTime)
                <?php 
                    if ($aux == true) {
                        $classe = 'amarelo';
                        $aux = false;
                    } elseif ($aux == false) {
                        $classe = 'branco';
                        $aux = true;
                    }
                ?>
                @foreach ($alunos as $aluno)
                    @if ($alunoTime->idTime == $dados->idTime and $aluno->idAluno == $alunoTime->idAluno)
                    <tr class="{{$classe}}">
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->turma}} {{$aluno->curso}}</td>
                        <td><a href="../../times/retirarAluno/{{$aluno->idAluno}}/{{$dados->idTime}}">Remover Aluno</a></td>
                    </tr>
                    @endif
                @endforeach
            @endforeach
        </table>
    </div>
</div>
@endsection