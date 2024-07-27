<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

</head>

<body class="padrao">
    <div class="cabecalho">
        <a class="titulo" href="{{route("inicio")}}">
            <h1 class="educacao">EDUCAÇÃO</h1>
        </a>
        <a class="titulo" href="{{route("inicio")}}">
            <h1 class="fisica">FÍSICA</h1>
        </a>
    </div>

    <div class="opcoes">
        <div class="treinos">
            <h2 class="opcoes">Treinos / Amistosos</h2>
        </div>
        <div class="reservas">
            <h2 class="opcoes">Reservas</h2>
        </div>
        <div class="times">
            <h2 class="opcoes">Times</h2>
        </div>
        <div class="configuracoes">
            <h2 class="opcoes">Configurações</h2>
        </div>

        <div class="conjunto">

            <div>
                <input class="caixa" type="checkbox">
                <div class="menuHamburguer">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="opcoesHambuguer">
                    <h4 class="opcaoUm">Treinos / Amistosos</h4>
                    <h4 class="opcaoDois">Reservas</h4>
                    <h4 class="opcaoTres">Times</h4>
                    <h4 class="opcaoQuatro">Configurações</h4>

                    <div class="subopcoesHamburguer subopcaoUm">
                        <a class="titulo" href="{{route("enviaModalidadesCadastro")}}">
                            <h4>Cadastrar novo treino ou amistoso</h4>
                        </a>
                        <a class="titulo" href="{{route("indexTreino")}}">
                            <h4>Ver treinos e amistosos</h4>
                        </a>
                        <a class="titulo" href="{{route("indexCronograma")}}">
                            <h4>Cronograma</h4>
                        </a>
                    </div>

                    <div class="subopcoesHamburguer subopcaoDois">
                        <a class="titulo" href="{{route("indexReserva")}}">
                            <h4>Ver reservas</h4>
                        </a>
                        <a class="titulo" href="{{route("indexSolicitacao")}}">
                            <h4>Ver solicitações de reservas</h4>
                        </a>
                    </div>

                    <div class="subopcoesHamburguer subopcaoTres">
                        <a class="titulo" href="{{route("enviaModalidadeTimes")}}">
                            <h4>Cadastrar novo time</h4>
                        </a>
                        <a class="titulo" href="{{route("indexTime")}}">
                            <h4>Ver times</h4>
                        </a>
                        <h4>Jogos</h4>
                    </div>

                    <div class="subopcoesHamburguer subopcaoQuatro">
                        <a class="titulo" href="{{route("novaModalidade")}}">
                            <h4>Cadastrar modalidade</h4>
                        </a>
                        <a class="titulo" href="{{route("indexModalidade")}}">
                            <h4>Ver modalidades</h4>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <div class="subopcoes um">
            <div class="laranja"></div>
            <a class="titulo" href="{{route("enviaModalidadesCadastro")}}">
                <h3>Cadastrar novo treino ou amistoso</h3>
            </a>
            <a class="titulo" href="{{route("indexTreino")}}">
                <h3>Ver treinos e amistosos</h3>
            </a>
            <a class="titulo" href="{{route("indexCronograma")}}">
                <h3>Cronograma</h3>
            </a>
        </div>

        <div class="subopcoes dois">
            <div class="laranja"></div>
            <a class="titulo" href="{{route("indexReserva")}}">
                <h3>Ver reservas</h3>
            </a>
            <a class="titulo" href="{{route("indexSolicitacao")}}">
                <h3>Ver solicitações de reservas</h3>
            </a>
        </div>

        <div class="subopcoes tres">
            <div class="laranja"></div>
            <a class="titulo" href="{{route("enviaModalidadeTimes")}}">
                <h3>Cadastrar novo time</h3>
            </a>
            <a class="titulo" href="{{route("indexTime")}}">
                <h3>Ver times</h3>
            </a>
            <h3>Jogos</h3>
        </div>

        <div class="subopcoes quatro">
            <div class="laranja"></div>
            <a class="titulo" href="{{route("novaModalidade")}}">
                <h3>Cadastrar modalidade</h3>
            </a>
            <a class="titulo" href="{{route("indexModalidade")}}">
                <h3>Ver modalidades</h3>
            </a>
        </div>

    </div>
    </div>

    <div>
        @hasSection ('content')
            @yield ('content')
        @endif
    </div>
</body>

</html>