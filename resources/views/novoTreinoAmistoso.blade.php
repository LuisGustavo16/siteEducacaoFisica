@extends ('cabecalho')
@section('content')
    <form action="{{route("adicionaTreinoAmistoso")}}" method="POST">
        @csrf
        <label for="idModalidade">ID da Modalidade:</label>
        <input type="text" name="idModalidade">

        <label for="dia">Dia:</label>
        <input type="text" name="dia">

        <label for="horario">Horário:</label>
        <input type="text" name="horario">

        <label for="genero">Gênero:</label>
        <input type="text" name="genero">

        <label for="publico">Publico:</label>
        <input type="text" name="publico">

        <label for="local">Local:</label>
        <input type="text" name="local">

        <label for="responsavel">Responsável:</label>
        <input type="text" name="responsavel">

        <label for="observacao">Observação:</label>
        <input type="text" name="observacao">

        <button type="submit">Enviar</button>
    </form>
@endsection