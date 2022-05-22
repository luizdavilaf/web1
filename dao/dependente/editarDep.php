<?php
require_once('../class/cliente.php');
require_once('../class/dependente.php');

$cod = intval($_GET['cod']);

$depDao=new dependenteDAO;
$cliDao=new clienteDao;
$dep=$depDao->buscarDep($cod);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Editar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Editar</h2>

<?php

	
        $codigoDep=$dep->getCod();
        $nomeDep=$dep->getNome();
        $relacao=$dep->getRelacao();  
        $codigoCli=$dep->getCliente()->getCod();  
        
	

?>
  
  <form method="POST" action="./editarDep2.php">
     
     <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $codigoDep; ?>" readonly >
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nomeDep; ?>">
                </div>
                <div class="form-group">
                    <label for="relacao">Relação:</label>
                    <input type="text" class="form-control" id="relacao" name="relacao" value="<?php echo $relacao; ?>">
                </div>
     
     <div class="form-group">
                    <label for="cliente">Cliente</label>
                    
     <select name="cliente" id="cliente" class="form-control">
     <?php
     
    $clientes=$cliDao->listaClientes();
    foreach ($clientes as $cliente) {
            $codigo = $cliente->getCod();
            $nomeCli = $cliente->getNome();
            if($codigo==$codigoCli)
                echo "<option selected value='$codigo'>$nomeCli</option>";
            else
                echo "<option value='$codigo'>$nomeCli</option>";
        }
    
?>
 </select>
</div>
    <input type="submit" name="submit" value="Alterar" class="btn btn-primary">
  </form>


</body>
</html>
