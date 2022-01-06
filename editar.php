<?php
include_once 'includes/header.php';
require_once 'php_action/db_connect.php';
if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id= '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="container">
      <div class="jumbotron mt-3">
<form action="php_action/update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
  <div class="form-group">
  <h3 class="light">Editar Client</h3>
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" 
    aria-describedby="emailHelp" placeholder="Seu Nome" value="<?php echo $dados['nome'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail" 
    value="<?php echo $dados['email'];?>">
    <small id="emailHelp" class="form-text text-muted">Não iremos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Idade</label>
    <input type="text" class="form-control" name="idade" id="idade" placeholder="Idade" 
    value="<?php echo $dados['idade'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sobrenome</label>
    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" 
    value="<?php echo $dados['sobrenome'];?>">
  </div>
  <button type="submit" class="btn btn-primary" name="btn-autualizar">ATUALIZAR</button>
  <a href="listaDeClientes.php" class="btn btn-secondary">LISTA DE CLIENTES</a>
</form>
      </div>
</div>
<?php
include_once 'includes/footer.php';
?>
