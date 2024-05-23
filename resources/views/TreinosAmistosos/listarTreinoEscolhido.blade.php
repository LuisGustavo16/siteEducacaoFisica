@extends ('cabecalho')
@section('content')
    <div class="fundo">
    <table>
        <thead>
            <tr class="amarelo escolhido">
                <th>Modalidade</th>
                <th>Dia</th>
                <th>Horário</th>
                <th>Gênero</th>
                <th>Publico</th>
                <th>Local</th>
                <th>Responsável</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
                <tr class="escolhido">
                    <td>{{$modalidade->nome}}</td>
                    <td>{{$dados->dia}}</td>
                    <td>{{$dados->horario}}</td>
                    <td>{{$dados->genero}}</td>
                    <td>{{$dados->publico}}</td>
                    <td>{{$dados->local}}</td>
                    <td>{{$dados->responsavel}}</td>
                    <td>{{$dados->observacao}}</td>
                </tr>
        </tbody>
    </table>
    </div>
@endsection