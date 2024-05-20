@extends ('cabecalho')
@section('content')
    <form action="{{route("adicionaTreinoAmistoso")}}" method="POST">
        @csrf
        <label for="idModalidade">ID da Modalidade:</label>
        <input type="text" name="idModalidade"> <br><br>

        <label for="dia">Dia:</label>
        <input type="text" name="dia"> <br><br>

        <label for="horario">Horário:</label>
        <input type="text" name="horario"> <br><br>

        <label for="genero">Gênero:</label>
        <input type="text" name="genero"><br><br>

        <label for="publico">Publico:</label>
        <input type="text" name="publico"><br><br>

        <label for="local">Local:</label>
        <input type="text" name="local"><br><br>

        <label for="responsavel">Responsável:</label>
        <input type="text" name="responsavel"><br><br>

        <label for="observacao">Observação:</label>
        <input type="text" name="observacao"><br><br>

        <button type="submit">Enviar</button>
    </form>
@endsection