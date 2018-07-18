<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'classes/ContaCorrente.class.php';
    require_once 'classes/Cliente.class.php';
    require_once 'classes/BancoDB.class.php';

?>    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
    <link rel="icon" href="resources/img/icons8-cartões-de-banco-48.png">
    <title>Banco</title>
</head>
<body>
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="resources/img/icons8-cartões-de-banco-48.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Banco
    </a>
  </nav>
    <form action="cadastrar-conta.php" method="post">
      <div class="container"><!--Inicio do Container-->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="Agencia">Agencia</label>
            <input type="number" class="form-control" name="agencia" placeholder="Agencia">
        </div>
    <div class="form-group col-md-6">
      <label for="Conta">Conta</label>
      <input type="number" class="form-control" name"conta" placeholder="Conta">
    </div>
  </div>
  <div class="form-group">
    <label for="saldo">Saldo</label>
    <input type="number" class="form-control" name="saldo" placeholder="Saldo">
  </div>
  <div class="form-group">
    <label for="dados pessoais">Dados Pessoais</label>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="nome">
    </div>
    <div class="form-group col-md-4">
      <label for="cpf">CPF</label>
      <input type="number" class="form-control" name="cpf">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
      </form>
      <table class="table table-striped">
        <?php
            $banco = new BancoDB();
            $contas = $banco->listaTodas();
        ?>
        <tr>
            <th>Agencia</th>
            <th>Conta</th>
            <th>Cliente</th>
            <th>CPF</th>
            <th>Saldo</th>
        </tr>
          <?php foreach ($contas as $conta) { ?>
              <tr>
                  <td><?=$conta->getAgencia();?></td>
                  <td><?=$conta->getNumero();?></td>
                  <td><?=$conta->getCliente()->getNome();?></td>
                  <td><?=$conta->getCliente()->getCpf();?></td>
                  <td><?=$conta->getSaldo();?></td>
              </tr>
          <?php } ?>  
      </table>
    </div><!--Fim do Container-->  
</body>
</html>