<?php
include('../../funcoes/conectar.php');
$con = conectar();

$codigo = $_POST['cod'];
$aluno = $_POST['aluno'];
$curso = $_POST['curso'];
$query = 'UPDATE "Matricula"' . " SET aluno ='$aluno', curso='$curso' WHERE codigo =$codigo";
pg_query($con, $query);
pg_close($con);
header("Location: ./selecionar.php");

?>


