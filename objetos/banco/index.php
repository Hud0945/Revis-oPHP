<!DOCTYPE html>
<html lang="pt-br">
<?php 
    require_once 'classes/ContaCorrente.class.php';
    require_once 'classes/Cliente.class.php';
    require_once 'classes/BancoDB.class.php';

?><!-- Requisição das classes PHP-->   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
    <link rel="icon" href="resources/img/icons8-cartões-de-banco-48.png">
    <title>Banco</title><!--Título da Pagína-->
</head>
<body>
<nav class="navbar navbar-light bg-light"> <!-- Barra de Navegação -->
    <a class="navbar-brand" href="#">
      <img src="resources/img/icons8-cartões-de-banco-48.png" width="30" height="30" class="d-inline-block align-top" alt="">
      Banco
    </a>
  </nav>
    <form action="cadastrar-conta.php" method="post"><!--Inicio do Formulário-->
      <div class="container"><!--Inicio do Container-->
        <div class="form-row" style="margin-top: 50px;">
          <div class="form-group col-4">
            <label for="Agencia">Agencia</label>
            <input type="text" class="form-control" name="agencia" id="agencia" placeholder="Agencia">
        </div>
    <div class="form-group col-4">
      <label for="Conta">Conta</label>
      <input type="text" class="form-control" name="conta" id="conta" placeholder="Conta">
    </div>
  </div>
  <div class="form-group">
    <label for="saldo">Saldo</label>
    <input type="text" class="form-control" name="saldo" id="saldo" placeholder="Saldo">
  </div>
  <div class="form-group">
    <fieldset for="dados do cliente">Dados do Cliente</fieldset>
  </div>
  <div class="form-row">
    <div class="form-group col-4">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome"name="nome">
    </div>
    <div class="form-group col-4">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" id="cpf" name="cpf">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button><!--Botão-->
</form>
      </form>       
      <table class="table table-striped table-hover"><!--Aqui fica à Tabela-->
        <?php
            $banco = new BancoDB();
            $contas = $banco->listaTodas();
        ?>
      <thead>  
        <tr>
            <th>Agencia</th>
            <th>Conta</th>
            <th>Cliente</th>
            <th>CPF</th>
            <th>Saldo</th>
        </tr>
      </thead>
      <tbody>  
          <?php foreach ($contas as $conta):  ?>
          </form>
              <tr>
                  <td><?=$conta->getAgencia();?></td>
                  <td><?=$conta->getNumero();?></td>
                  <td><?=$conta->getCliente()->getNome();?></td>
                  <td><?=$conta->getCliente()->getCpf();?></td>
                  <td><?=$conta->getSaldo();?></td>
                  <td>
                <form action="editar-conta.php" method="post">
                    <input type="hidden" name="conta" value="<?=$conta->getNumero();?>">
                    <button type="button" class="btn btn-primary">
                      <i class="far fa-edit"></i>
                  </button><!--Botão-->
                </form> 
                  </td>
                  <td>
                    <form action="excluir-conta.php" method="post">
                        <input type="hidden" name="conta" value="<?=$conta->getNumero();?>">
                        <button type="button" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i>
                        </button><!--Botão-->
                    </form>  
                  </td>
              </tr>
          <?php endforeach;?>
          </tbody>  
          <button type="button" class="btn btn-danger">Limpar</button><!--Botão-->    
      </table>
    </div><!--Fim do Container-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>  
</body>
</html>