@extends ('cabecalho')
@section('content')
    <div class="fundo">
        <form action="/treino_amistosos/{{$dados->idTreino}}" method="POST">
            @csrf
            <div class="coluna">
                <label for="idModalidade">ID da Modalidade:</label>
                <input type="text" name="idModalidade" value="{{$dados->idModalidade}}"> <br><br>

                <label for="dia">Dia:</label>
                <input type="text" name="dia" value="{{$dados->dia}}"> <br><br>

                <label for="horario">Horário:</label>
                <input type="text" name="horario" value="{{$dados->horario}}"> <br><br>
            </div>

            <div class="coluna">
                <label for="genero">Gênero:</label>
                <input type="text" name="genero" value="{{$dados->genero}}"><br><br>

                <label for="publico">Publico:</label>
                <input type="text" name="publico" value="{{$dados->publico}}"><br><br>

                <label for="local">Local:</label>
                <input type="text" name="local" value="{{$dados->local}}"><br><br>
            </div>

            <div class="coluna">
                <label for="responsavel">Responsável:</label>
                <input type="text" name="responsavel" value="{{$dados->responsavel}}"><br><br>

                <label for="observacao">Observação:</label>
                <input type="text" name="observacao" value="{{$dados->observacao}}"><br><br>
            </div>

            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection