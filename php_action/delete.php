<?php

session_start();
//Abrindo conexao com o banco de dados.
require_once 'db_connect.php';
//verifico se o botão foi pressionado
if (isset($_POST['btn-deletar'])) :
    //apos pressionar eu pego as informações e faço um filtro, colocando elas nas variaveis
    $id = mysqli_escape_string($connect, $_POST['id']);
    //aqui crio um comando sql para inserir os dados do cliente no banco de dados
    $sql = "DELETE FROM clientes WHERE id='$id'";
    //aqui verifico se a conexao aconteceu
    if (mysqli_query($connect, $sql)) :
        //criando sessao para exibir mensagem de confimação
        $_SESSION['mensagem'] = "Cliente Deletado com sucesso!";
        header('Location: ../listaDeClientes.php');
    else :
         //criando sessao para exibir mensagem de confimação
        $_SESSION['mensagem'] = "Não foi possível deletar o cliente!";
        header('Location: ../listaDeClientes.php');
    endif;
endif;
