<?php
    $aux = false;
    $classe = 'branco';
?>
@extends ('cabecalho')
@section('content')
<div class="fundo">
    <table>
        <caption>TREINOS & AMISTOSOS</caption>
        <thead>
            <tr class="amarelo">
                <th>ID</th>
                <th>Modalidade</th>
                <th>Dia</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
                <?php 
                    if ($aux == true) {
                        $classe = 'amarelo';
                        $aux = false;
                    } elseif ($aux == false) {
                        $classe = 'branco';
                        $aux = true;
                    }
                ?>
                <tr class="{{$classe}}">
                    <td>{{$item->idTreino}}</td>
                    <td>{{$item->idModalidade}}</td>
                    <td>{{$item->dia}}</td>
                    <td>
                        <a href="treino_amistosos/selecionado/{{$item->idTreino}}">Ver</a>
                        <a href="treino_amistosos/editar/{{$item->idTreino}}">Editar</a>
                        <a href="treino_amistosos/apagar/{{$item->idTreino}}"
                            onclick="return confirm('Deseja apagar o treino do dia {{$item->dia}} ?')">Excluir</a>
                    </td>
                </tr>
               
            @endforeach
        </tbody>
    </table>
</div>
@endsection