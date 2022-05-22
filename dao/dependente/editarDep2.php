<?php
require_once('../class/dependente.php');

$cod = $_POST['codigo'];
$nome= $_POST['nome'];
$relacao= $_POST['relacao'];
$cliente= $_POST['cliente'];


$depDao= new dependenteDao();
$cliDao= new clienteDao();

$dep = new dependente($nome,$relacao);
$dep->setCod($cod);
$dep->setCliente($cliDao->buscarCli($cliente));


$depDao->alterar($dep);
header("Location: mostrarDep.php");
?>

