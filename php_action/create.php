<?php

session_start();
//Abrindo conexao com o banco de dados.
require_once 'db_connect.php';
//verifico se o botão foi pressionado
if (isset($_POST['btn-cadastrar'])) :
    //apos pressionar eu pego as informações e faço um filtro, colocando elas nas variaveis
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    //aqui crio um comando sql para inserir os dados do cliente no banco de dados
    $sql = "INSERT INTO clientes (nome,email,idade,sobrenome) VALUES ('$nome', '$email', '$idade', '$sobrenome')";
    //aqui verifico se a conexao aconteceu
    if (mysqli_query($connect, $sql)) :
        //criando sessao para exibir mensagem de confimação
        $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
        header('Location: ../listaDeClientes.php');
    else :
         //criando sessao para exibir mensagem de confimação
        $_SESSION['mensagem'] = "Não foi possível cadastrar o cliente!";
        header('Location: ../listaDeClientes.php');
    endif;
endif;
