<?php 

$hostname = "127.0.0.1";
$bancodedados = "db_ocorrencia";
$usuario = "root";
$senha = "daniS1974@";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno){
    echo "falha ao conectar: (". $mysqli -> connect_errno . ")" . $mysqli -> connect_errno;
}else
    // echo "conectado"



?>