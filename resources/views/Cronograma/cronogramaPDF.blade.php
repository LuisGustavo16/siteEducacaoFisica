<?php
$j = 0;
$aux = 1;

if (!function_exists('confereDia')) {
    /*Caso tenha dias iguais, une as células*/
    function confereDia($data, $treinosConefrir, $posicaoAtual)
    {
        $qtdLinhas = 0;
        for ($i = 0; $i < count($treinosConefrir); $i++) {
            if (($posicaoAtual + $i) < (count($treinosConefrir))) {
                $treino = $treinosConefrir[$posicaoAtual + $i];
                $diaTreino = str($treino->dia);
                if (($data) == ($diaTreino)) {
                    $qtdLinhas++;
                }
            }
        }
        return $qtdLinhas;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            /*Cores do Site*/
            --white: #E6E8F4;
            --blue: #00198E;
            --yellow: #FFDF2B;
            --orange: #FFC24B;
            --yellowSecondary: #FFF1A8;
            --bottonAccept: #A2F294;
            --bottonAcceptSecondary: #4F9552;
            --bottonRecuse: #F87D7D;
            --bottonRecuseSecondary: #AC3C3C;
        }

        .dataSemana {
            font-family: "Inter", sans-serif;
            color: black;
            word-spacing: 20px;
            text-shadow: 0 0 0 black;
        }

        .tableCronograma,
        .tdCronograma {
            border: 0.1rem solid black;
            background-color: var(--yellow);
        }

        .tableCronograma,
        .thCronograma {
            border: 0.1rem solid black;
            background-color: var(--yellow);
        }

        .tableCronograma,
        .tr {
            height: 4rem;
        }

        table {
            border-collapse: collapse;
            margin-top: 3rem;
            height: 10rem;
            width: 55rem;
            background-color: white;
            border: 1px solid black;
            margin-bottom: 3rem;
        }
    </style>
</head>

<body>
    <div class="fundo">

        <table class="tabelaCronograma">
            <caption class="dataSemana">{{$inicioSemana}} - {{$fimSemana}}</caption>
            <thead>
                <th class="thCronograma">Data</th>
                <th class="thCronograma">Horário</th>
                <th class="thCronograma">Modalidade</th>
                <th class="thCronograma">Gênero</th>
                <th class="thCronograma">Público</th>
                <th class="thCronograma">Local</th>
                <th class="thCronograma">Responsável</th>
            </thead>
            <tbody>
                @foreach ($treinos as $treino)
                    @foreach ($modalidades as $modalidade)
                        @if ($modalidade->idModalidade == $treino->idModalidade)
                            <tr>
                                @if ($aux == 1)
                                    <?php                $aux = confereDia($treino->dia, $treinos, $j)?>
                                    <td class="tdCronograma" rowspan="{{confereDia($treino->dia, $treinos, $j)}}">{{$treino->dia}}</td>
                                @else
                                    <?php                $aux--; ?>
                                @endif
                                <td class="tdCronograma">{{$treino->horario}}</td>
                                <td class="tdCronograma">{{$modalidade->nome}}</td>
                                <td class="tdCronograma">{{$treino->genero}}</td>
                                <td class="tdCronograma">{{$treino->publico}}</td>
                                <td class="tdCronograma">{{$treino->local}}</td>
                                <td class="tdCronograma">{{$treino->responsavel}}</td>
                            </tr>
                            <?php            $j++; ?>
                        @endif
                    @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>