<?php
include("../../funcoes/conectar.php");
$con = conectar();
$nome = $_POST["nome"];
$email = $_POST["mail"];
$telefone = $_POST["telefone"];
$query = 'INSERT INTO "Aluno"' . " (nome,email,telefone) values ('$nome','$email','$telefone')";
pg_query($con, $query);

pg_close($con);
header("Location: ./selecionar.php");
?>
<!-- /* echo "<script type='javascript'>alert('Curso inserido com Sucesso');";
echo "javascript:window.location='index.php';</script>"; */ -->