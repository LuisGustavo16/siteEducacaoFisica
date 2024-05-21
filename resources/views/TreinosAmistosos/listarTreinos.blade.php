@extends ('cabecalho')
@section('content')
    <div class="fundo">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Modalidade</th>
                    <th>Dia</th>
                    <th>Mais</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                        <tr>
                            <td>{{$item->idTreino}}</td>
                            <th>{{$item->idModalidade}}</th>
                            <th>{{$item->dia}}</th>
                            <th><a href="treino_amistosos/selecionado/{{$item->idTreino}}">Ver</a></th>
                            <th><a href="treino_amistosos/editar/{{$item->idTreino}}">Editar</a></th>
                            <th><a href="treino_amistosos/apagar/{{$item->idTreino}}" onclick="return confirm('Deseja apagar este treino/amistoso ?')">Excluir</a></th>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection