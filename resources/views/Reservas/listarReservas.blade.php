<?php
    $aux = false;
    $classe = 'branco';
?>
@extends ('cabecalho')
@section('content')
    <div class="fundo">
        <table>
            <caption>Quadra</caption>
            <thead>
                <tr class="amarelo">
                    <th>Dia</th>
                    <th>Local</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $item)
                    <?php 
                        if ($aux == true) {
                            $classe = 'amarelo';
                            $aux = false;
                        } elseif ($aux == false) {
                            $classe = 'branco';
                            $aux = true;
                        }
                    ?>
                        <tr class="{{$classe}}">
                            <td>{{$item->dia}}</td>
                            <td>{{$item->local}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection