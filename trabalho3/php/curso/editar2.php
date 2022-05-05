<?php
include('../../funcoes/conectar.php');
$con = conectar();

$codigo = $_POST['cod'];
$sala = $_POST['sala'];
$professor = $_POST['professor'];
$nome_turma = $_POST['nome_turma'];
$query = 'UPDATE "Curso"' . " SET sala ='$sala', professor='$professor', nome_turma= '$nome_turma' WHERE codigo =$codigo";
pg_query($con, $query);
pg_close($con);
header("Location: ./selecionar.php");

?>


