@extends ('cabecalho')
@section('content')
<div class="fundo">
    <div class="tabela">
    <div class="divListar solicitacao">
        <div class="campoListarTreinoEscolhido"><h1 class="textoSolicitacao">Aluno:</h1> <h2>{{$aluno->nome}} / {{$aluno->turma}} {{$aluno->curso}}</h2></div>
        <div class="campoListarTreinoEscolhido"><h1 class="textoSolicitacao">Dia:</h1> <h2>{{$dados->dia}}</h2></div>
        <div class="campoListarTreinoEscolhido"><h1 class="textoSolicitacao">Local:</h1> <h2>{{$dados->local}}</h2></div>
        <div class="campoListarTreinoEscolhido"><h1 class="textoSolicitacao">Horário de Inicio:</h1> <h2>{{$dados->horarioInicio}}</h2></div>
        <div class="campoListarTreinoEscolhido"><h1 class="textoSolicitacao">Horário de Inicio:</h1> <h2>{{$dados->horarioInicio}}</h2></div>
        <div class="campoListarTreinoEscolhido"><h1 class="textoSolicitacao">Finalidade:</h1> <h2>{{$dados->finalidade}}</h2></div>
        <div class="campoListarTreinoEscolhido pessoas"><h1 class="textoSolicitacao">Número estimado de pessoas:</h1> <h2>12</h2></div>
    </div>
    <div class="centralizarBotoes ">
        <a class="cancelar" href="/reservas/cancelarReserva/{{$dados->idReserva}}">Cancelar reserva</a>

    </div>
    </div>
    
    @endsection