<?php

//Conexão com o banco de dados
//Variaveis de conexao
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";
//variavel connect
$connect = mysqli_connect($servername, $username, $password, $db_name);
//codificação dos caracters
mysqli_set_charset($connect, "utf8");
//verificação de erro de conexao
if (mysqli_connect_error()) :
    echo "Erro na conexão: " . mysqli_connect_error();
endif;
