<?php
include("../../funcoes/conectar.php");
$con = conectar();
$aluno = $_POST["aluno"];
$curso = $_POST["curso"];
$query = 'INSERT INTO "Matricula"' . " (aluno,curso) values ('$aluno','$curso')";
pg_query($con, $query);
pg_close($con);
header("Location: ./selecionar.php");
?>

