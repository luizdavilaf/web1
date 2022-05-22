<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Selecionar</title>
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
require_once('../class/dependente.php');

$depDao=new dependenteDAO();
$dependentes=$depDao->listaDependentes();


        echo "<table class='table table-striped'>";
        echo "<tr>";
        echo "<th>Código</th>";
        echo "<th>Nome Dependente</th>";
        echo "<th>Cliente</th>";
        echo "<th>Relação</th>";
        echo "<th>Editar</th>";
        echo "<th>Excluir</th>";
        echo "</tr>";

	foreach ($dependentes as $dep) {
                $codigo=$dep->getCod();
                $nome=$dep->getNome();
                $relacao=$dep->getRelacao();
                $cliente=$dep->getCliente()->getNome();

        echo "<tr>";
        echo "<td> $codigo </td>";
        echo "<td> $nome </td>";
        echo "<td> $cliente </td>";
        echo "<td> $relacao </td>";
        echo "<td><a href='./editarDep.php?cod=$codigo'>Editar</a></td>";
        echo "<td><a href='./excluirDep.php?cod=$codigo'>Excluir</a></td>";
        echo "</tr>";

               
	}
        echo "</table>";

?>


<br><br><br>
<a href='./inserirDep.php' class="btn btn-primary">Inserir</a> 

</body>
</html>
