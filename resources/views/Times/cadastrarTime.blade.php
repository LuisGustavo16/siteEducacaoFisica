@extends ('cabecalho')
@section('content')
    <div class="fundo">
        <form action="{{route("cadastrarTime")}}" method="POST">
            @csrf
            <div class="coluna">
                <div class="campo">
                    <label for="idModalidade">*Modalidade:</label><br>
                    <input type="text" name="idModalidade">
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
                
            </div>

            <div class="coluna">
                <div class="campo">
                    <label for="competicao">*Competição:</label><br>
                    <input type="text" name="competicao">
                </div>
            </div>

            <button class="botao" type="submit">Enviar</button>
        </form>
    </div>
@endsection