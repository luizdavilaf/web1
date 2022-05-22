<?php
require_once('../class/cliente.php');

$clienteDao=new clienteDAO();
$clientes=$clienteDao->listaClientes();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Inserir</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Inserir</h2>


  <form method="POST" action="./inserirDep2.php">
     
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control"  id="nome" name="nome" value="">
  </div>
  <div class="form-group">
    <label for="cpf">Relação:</label>
    <input type="text" class="form-control" id="relacao" name="relacao" value="">
  </div>
  <div class="form-group">
    <label for="cliente">Cliente:</label>
     <select name="cliente" class="form-control">
     <?php
     
     foreach ($clientes as $cli) {
      $codigo=$cli->getCod();
      $nome=$cli->getNome();
      
      echo "<option value='$codigo'>$nome</option>";
    }
    
    
?>
 </select>



    <hr />
    <input type="submit" name="submit" value="inserir" class="btn btn-primary">
  </form>


</body>
</html>
