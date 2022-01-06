<?php
include_once 'includes/header.php';
?>
<div class="container">
      <div class="jumbotron mt-3">
<form action="php_action/create.php" method="POST">
  <div class="form-group">
  <h3 class="light">Novo Cliente</h3>
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Seu Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail">
    <small id="emailHelp" class="form-text text-muted">Não iremos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Idade</label>
    <input type="text" class="form-control" name="idade" id="idade" placeholder="Idade">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sobrenome</label>
    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
  </div>
  <button type="submit" class="btn btn-primary" name="btn-cadastrar">CADASTRAR CLIENTE</button>
  <a href="listaDeClientes.php" class="btn btn-secondary">LISTA DE CLIENTES</a>
</form>
      </div>
</div>

<?php
include_once 'includes/footer.php';
?>
