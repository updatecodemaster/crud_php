<?php
//incluindo a header
include_once 'includes/header.php';
// abrindo conexao com o banco de dados
include_once 'php_action/db_connect.php';
//abre a sessão para exibir a mensagem de alerta
session_start();
if (isset($_SESSION['mensagem'])) :?>
<div class="alert alert-primary" role="alert">
    <?php echo $_SESSION['mensagem'];?>
</div>
    <?php
endif;
//fecha a sessão para a mensagem sumir
session_unset();
?>

<header>
    <h3><i class="bi bi-person-square"></i> Clientes</h3>
</header>
<div class="tabela">
<table class="table table-dark table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Idade</th>
            <th>Sobrenome</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>

    <?php
            //pegando todos os dados da tabela cliente com o comando sql
            $sql = "SELECT * FROM clientes";
            //colocando todos os dados dentro de resultado
            $resultado = mysqli_query($connect, $sql);
            // so execulta o loop array se tiver dados no banco
    if (mysqli_num_rows($resultado) > 0) :
    //abrindo um loop para ele pecorrer todos os registros
        while ($dados = mysqli_fetch_array($resultado)) :
            ?>
            <tr>
                <!-- Apos transformar os dados em arrays, eu os exibo -->
                <td><?php echo $dados[1]; ?></td>
                <td><?php echo $dados[2]; ?></td>
                <td><?php echo $dados[3]; ?></td>
                <td><?php echo $dados[4]; ?></td>
                <td class="text-center">
                <a class="btn btn-outline-warning btn-sm" href="editar.php?id=<?php echo $dados['id'];?>"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td class="text-center">
                <a class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal<?php echo $dados['id'];?>"><i class="bi bi-trash-fill"></i></a>    
                </td>
            </tr>
                <!-- Modal Structure -->
                <div id="modal<?php echo $dados['id']?>" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ATENCÃO!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                <div class="modal-body">
                    <p>Você realmente que excluir este registro ?</p>
                </div>
                <div class="modal-footer">
                    <form action="php_action/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                    <button type="submit" name="btn-deletar" class="btn btn-primary">SIM, DELETAR!</button>
                    </form>
                </div>
                        </div>
                    </div>
                </div>
                <!-- END Structure -->
                    <?php
        endwhile;
    else :?>
            <!-- isso aqui e para deixa uma linha vazia caso não tenha registros -->
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>

                <?php
    endif;
    ?>
        
    </tbody>
</table>
<div>
    <a class="btn btn-outline-secondary mb-2" href="adicionar.php"><i class="bi bi-person-plus-fill"></i> Adicionar novo Cliente</a>
</div>

<?php
include_once 'includes/footer.php';
?>
