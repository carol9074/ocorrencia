<?php

include 'config/conexao.php';
session_start();
switch ($_REQUEST['acao']) {
    case 'login':
     

        if (isset($_POST['email']) || isset($_POST['senha'])) {
            if (strlen($_POST['email']) == 0) {
                echo "<script>alert('Informe um Email!')</script>";
            } else if (strlen($_POST['senha']) == 0) {
                echo "<script>alert('Informe uma Senha!')</script>";
            } else {
        
                $email = $mysqli->real_escape_string($_POST['email']);
                $senha = $mysqli->real_escape_string($_POST['senha']);
        
                $sql = "SELECT * FROM cadastro_usuario WHERE email = '$email' AND senha = '$senha'";
        
                $sql_query = $mysqli->query($sql) or die("Falha na execução");
        
                $qtd = $sql_query->num_rows;
        
                if ($qtd == 1) {
        
                    $usuario = $sql_query->fetch_assoc();
        
                    if (!isset($_SESSION)) {
                        session_start();
                    }
        
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    echo "logol";
                    header('Location: config/painel.php');
                } else {
                    echo "Falha ao logar";
                }
            }
}





}
