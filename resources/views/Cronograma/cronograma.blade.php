@extends ('cabecalho')
@section('content')
<div class="fundo">

    <table class="tabelaCronograma">
        <caption class="dataSemana">{{$inicioSemana}} - {{$fimSemana}}</caption>
        <thead>
            <th>Data</th>
            <th>Horário</th>
            <th>Modalidade</th>
            <th>Gênero</th>
            <th>Público</th>
            <th>Local</th>
            <th>Responsável</th>
        </thead>
        <tbody>
            @foreach ($treinos as $treino)
                @foreach ($modalidades as $modalidade)
                    @if ($modalidade->idModalidade == $treino->idModalidade)
                        <tr>
                            <td>{{$treino->dia}}</td>
                            <td>{{$treino->horario}}</td>
                            <td>{{$modalidade->nome}}</td>
                            <td>{{$treino->genero}}</td>
                            <td>{{$treino->publico}}</td>
                            <td>{{$treino->local}}</td>
                            <td>{{$treino->responsavel}}</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach

        </tbody>
    </table>
</div>
@endsection