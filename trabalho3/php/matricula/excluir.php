<?php
include '../../funcoes/conectar.php';
$con=conectar();
$codigo = $_GET["cod"]; 
$query='DELETE FROM "Matricula"'. "where codigo=$codigo";
pg_query($con,$query);
pg_close($con);
header("Location: ./selecionar.php");
