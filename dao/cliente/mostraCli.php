<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once('../class/cliente.php');

$clienteDao=new clienteDAO();
$clientes=$clienteDao->listaClientes(); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Selecionar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Selecionar</h2>
    
    <?php
    echo "<table class='table table-striped'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nome</th>";
    echo "<th>CPF</th>";
    echo "<th>Editar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";
    foreach ($clientes as $cli) {
        $codigo=$cli->getCod();
        $nome=$cli->getNome();
        $cpf=$cli->getCpf();
        

        echo "<tr>";
        echo "<td>$codigo</td>";
        echo "<td>$nome</td>";
        echo "<td>$cpf</td>";
        echo "<td><a href='alteraCli1.php?cod=$codigo'>Editar</a></td>";
        echo "<td><a href='deletaCli1.php?cod=$codigo'>Excluir</a></td>";
        echo "</tr>";

    } 
    
    echo "</table>";
    echo "<br><br><a href='./insereCli1.php'>Inserir</a>";
    ?>
    
        </div>
    </body>
</html>