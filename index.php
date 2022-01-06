<?php
//incluindo a header
include_once 'includes/header.php';
?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">CRUD de clientes!</h1>
          <p>Este e um crud basico feito com php utilizando o PHP procedural como arquitetura, apenas para
              fins de conhecimento ja que o correto seria utilizar o PDO orientado a objetos.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Leia mais &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Como utilizar</h2>
            <p>Clique no link ali em cima chamado "Lista de clientes" para verificar todos os clientes registrados. </p>
            <p><a class="btn btn-secondary" href="#" role="button">Veja mais &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Importe o banco de dados da pasta "database"</h2>
            <p>Esta pasta esta dentro dos arquivo upados no github</p>
            <p><a class="btn btn-secondary" href="#" role="button">Veja mais &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Todas as partes comentadas</h2>
            <p>Todo o codigo foi comentado para fins didaticos.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Veja Mais &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>
<?php
include_once 'includes/footer.php';

