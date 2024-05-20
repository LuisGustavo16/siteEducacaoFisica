<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
</head>
<body class="padrao">
    <div class="cabecalho">
        <h1 class="educacao">EDUCAÇÃO</h1>
        <h1 class="fisica">FÍSICA</h1>
    </div>

    <div class="opcoes">
        <div class="treinos"><h2 class="opcoes">Treinos / Amistosos</h2></div>
        <div class="reservas"><h2 class="opcoes">Reservas</h2></div>
        <div class="times"><h2 class="opcoes">Times</h2></div>
        <div class="configuracoes"><h2 class="opcoes">Configurações</h2></div>
        
        <div class="conjunto">

            <div class="subopcoes um">
                <div class="laranja"></div>
                <h3>Cadastrar novo treino ou amistoso</h3>
                <h3>Ver treinos e amistosos</h3>
                <h3>Cronograma</h3>
            </div>

            <div class="subopcoes dois">
                <div class="laranja"></div>
                <h3>Ver reservas</h3>
                <h3>Solicitações de reservas</h3>
            </div>

            <div class="subopcoes tres">
                <div class="laranja"></div>
                <h3>Configurar times</h3>
                <h3>Jogos</h3>
            </div>

            <div class="subopcoes quatro">
                <div class="laranja"></div>
                <h3>Configurar modalidades</h3>
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