<?php
require_once('../class/cliente.php');
require_once('../class/dependente.php');

$nome= $_POST['nome'];
$relacao= $_POST['relacao'];
$cliente= $_POST['cliente'];

$depDao=new dependenteDAO();
$cli= new clienteDao;

$dep=new dependente($nome,$relacao);
$dep->setCliente($cli->buscarCli($cliente));
$depDao->inserir($dep);
  

header("Location: mostrarDep.php");
?>

