<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Ocorrências</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        select {
            padding: 8px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .telaInvisivel {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .dadosUsuario {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Administração de Ocorrências</h2>

    <table>
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data e Hora</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
        <tr>
            <td>Ocorrência 1</td>
            <td>Descrição da ocorrência 1.</td>
            <td>2024-01-16 12:30</td>
            <td>
                <select id="statusOcorrencia1" name="statusOcorrencia1">
                    <option value="aberta">Aberta</option>
                    <option value="em_andamento">Em Andamento</option>
                    <option value="concluida">Concluída</option>
                </select>
            </td>
            <td>
                <input type="submit" value="Atualizar Status" onclick="atualizarStatus('statusOcorrencia1')">
                <input type="submit" value="Ver Dados" onclick="mostrarDadosUsuario('Ocorrência 1')">
                <input type="submit" value="Deletar" onclick="deletarOcorrencia('Ocorrência 1')">
            </td>
        </tr>
        <tr>
            <td>Ocorrência 2</td>
            <td>Descrição da ocorrência 2.</td>
            <td>2024-01-16 14:45</td>
            <td>
                <select id="statusOcorrencia2" name="statusOcorrencia2">
                    <option value="aberta">Aberta</option>
                    <option value="em_andamento">Em Andamento</option>
                    <option value="concluida">Concluída</option>
                </select>
            </td>
            <td>
                <input type="submit" value="Atualizar Status" onclick="atualizarStatus('statusOcorrencia2')">
                <input type="submit" value="Ver Dados" onclick="mostrarDadosUsuario('Ocorrência 2')">
                <input type="submit" value="Deletar" onclick="deletarOcorrencia('Ocorrência 2')">
            </td>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
    </table>

    <div id="telaInvisivel" class="telaInvisivel">
        <div class="dadosUsuario">
            <h3>Dados do Usuário</h3>
            <p>Nome: Fulano de Tal</p>
            <p>Email: fulano@example.com</p>
            <p>Telefone: (00) 1234-5678</p>
            <input type="submit" value="Fechar" onclick="fecharDadosUsuario()">
        </div>
    </div>

    <script>
        function atualizarStatus(idSelect) {
            var select = document.getElementById(idSelect);
            var novoStatus = select.value;
            // Lógica para enviar o novo status para o servidor ou realizar outras ações necessárias
            console.log('Ocorrência: ' + idSelect + ', Novo Status: ' + novoStatus);
        }

        function mostrarDadosUsuario(ocorrencia) {
            var telaInvisivel = document.getElementById('telaInvisivel');
            telaInvisivel.style.display = 'flex';
            console.log('Visualizando dados do usuário para a ocorrência: ' + ocorrencia);
        }

        function deletarOcorrencia(ocorrencia) {
            // Lógica para deletar a ocorrência do sistema
            console.log('Deletando ocorrência: ' + ocorrencia);
        }

        function fecharDadosUsuario() {
            var telaInvisivel = document.getElementById('telaInvisivel');
            telaInvisivel.style.display = 'none';
            console.log('Fechando dados do usuário.');
        }
    </script>

</body>
</html>
