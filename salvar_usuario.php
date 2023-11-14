<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $ende = $_POST['ende'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];



        $sql = "INSERT INTO user (nome, cpf, email, senha, ende, complemento, cidade, bairro, cep) 
        VALUES ('{$nome}', '{$cpf}', '{$email}', '{$senha}', '{$ende}', '{$complemento}', '{$cidade}', '{$bairro}', '{$cep}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastro realizado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Cadastro não foi realizado!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    // case 'editar':

    //     $nome = $_POST['nome'];
    //     $cpf = $_POST['cpf'];
    //     $email = $_POST['email'];
    //     $senha = $_POST['senha'];
    //     $ende = $_POST['ende'];
    //     $complemento = $_POST['complemento'];
    //     $cidade = $_POST['cidade'];
    //     $bairro = $_POST['bairro'];
    //     $cep = $_POST['cep'];

    //     $sql = "UPDATE user SET
    //     nome='{$nome}',
    //     $cpf = $_POST['cpf'];
    //     $email = $_POST['email'];
    //     $senha = $_POST['senha'];
    //     $ende = $_POST['ende'];
    //     $complemento = $_POST['complemento'];
    //     $cidade = $_POST['cidade'];
    //     $bairro = $_POST['bairro'];
    //     $cep = $_POST['cep'];'
    //     WHERE id=" . $_REQUEST["id"];

    //     $res = $conn->query($sql);

    //     if ($res == true) {
    //         print "<script>alert('Editado com sucesso!');</script>";
    //         print "<script>location.href='?page=listar';</script>";
    //     } else {
    //         print "<script>alert('Não foi possivel editar!');</script>";
    //         print "<script>location.href='?page=listar';</script>";
    //     }
    //     break;

    // case 'excluir':

    //     $sql = "DELETE FROM user WHERE id=" . $_REQUEST["id"];

    //     $res = $conn->query($sql);

    //     if ($res == true) {
    //         print "<script>alert('Deletado com sucesso!');</script>";
    //         print "<script>location.href='?page=listar';</script>";
    //     } else {
    //         print "<script>alert('Não foi possivel deletar!');</script>";
    //         print "<script>location.href='?page=listar';</script>";
    //     }
    //     break;
}
