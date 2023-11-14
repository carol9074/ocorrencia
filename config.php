<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'db_ocorrencia');


//Realizando conexão com o banco atraves do mysqli 
$conn = new mysqli(HOST, USER, PASS, BASE);

?>