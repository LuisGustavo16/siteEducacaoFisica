@extends ('cabecalho')
@section('content')
<div class="fundo">
    <form class="cadastrarTime" action="{{route("cadastrarTime")}}" method="POST">
        @csrf
        <div class="coluna">
            <div class="campo">
                <label for="modalidade">*Modalidade:</label><br>
                <select class="modalidade" type="checkbox" name="idModalidade">
                    @foreach ($modalidades as $modalidade)
                        <option value="{{$modalidade->idModalidade}}">{{$modalidade->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="campo">
                <label for="genero">*Gênero:</label><br>
                <select type="checkbox" name="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Misto">Misto</option>
                </select>
            </div>
        </div>


        <div class="coluna competicao">
            <div class="campo">
                <label for="competicao">*Competição:</label><br>
                <input type="text" name="competicao">
            </div>
        </div>

        <button class="botao" type="submit">Enviar</button>
    </form>
</div>
@endsection