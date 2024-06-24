@extends ('cabecalho')
@section('content')
    <div class="fundo">
        <form action="/treino_amistosos/atualizar/{{$dados->idTreino}}" method="POST">
            @csrf
            <div class="coluna">
                <div class="campo">
                    <label for="dia">Dia:</label> <br>
                    <input class="dia" type="date" name="dia" value="{{$dados->dia}}">
                </div>

                <div class="campo">
                    <label for="horario">Horário:</label> <br>
                    <input class="horario" type="time" name="horario" value="{{$dados->horario}}">
                </div>
                
                <div class="campo">
                    <label for="responsavel">Responsável:</label> <br>
                    <input type="text" name="responsavel" value="{{$dados->responsavel}}">
                </div>
                
            </div>

            <div class="coluna">
                <div class="campo">
                    <label for="genero">*Gênero:</label><br>
                    <select type="checkbox" name="genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Misto">Misto</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="publico">Publico:</label> <br>
                    <input type="text" name="publico" value="{{$dados->publico}}">
                </div>

                <div class="campo">
                    <label for="local">Local:</label> <br>
                    <input type="text" name="local" value="{{$dados->local}}">
                </div>

            </div>

            <div class="coluna">
                <div class="campo">
                    <label for="observacao">Observação:</label> <br>
                    <input class="observacao" type="text" name="observacao" value="{{$dados->observacao}}">
                </div>

            </div>

            <button class="botao" type="submit">Salvar</button>
        </form>
    </div>
@endsection