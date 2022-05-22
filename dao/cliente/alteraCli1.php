<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('../class/cliente.php');

$cod = intval($_GET['cod']);

$clienteDao=new clienteDAO();
$cli=$clienteDao->buscarCli($cod); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>PDO - Editar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>PDO - Editar</h2>
            <form action="alteraCli2.php" method="post">
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" id="cod" name="cod" value="<?php echo $cli->getCod(); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cli->getNome();?>">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cli->getCpf(); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>
</html>
