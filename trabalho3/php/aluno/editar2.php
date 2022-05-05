<?php
include('../../funcoes/conectar.php');
$con = conectar();

$codigo = $_POST['cod'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$query = 'UPDATE "Aluno"' ." SET nome ='$nome', email='$email', telefone= '$telefone' WHERE codigo =$codigo";
pg_query($con, $query);
pg_close($con);
header("Location: ./selecionar.php");

?>

