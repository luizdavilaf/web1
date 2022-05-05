<?php
include '../../funcoes/conectar.php';
$con=conectar();
$codigo = $_GET["cod"]; 
$query='DELETE FROM "Curso"'. "where codigo=$codigo";
pg_query($con,$query);
$query = 'DELETE FROM "Matricula"' . "where curso=$codigo";
pg_query($con, $query);
pg_close($con);
header("Location: ./selecionar.php");
