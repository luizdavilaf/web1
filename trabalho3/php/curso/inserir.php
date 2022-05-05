<?php
include("../../funcoes/conectar.php");
$con = conectar();
$sala = $_POST["sala"];
$professor = $_POST["professor"];
$nome_turma = $_POST["nome_turma"];
$query = 'INSERT INTO "Curso"' . " (sala,professor,nome_turma) values ('$sala','$professor','$nome_turma')";
pg_query($con, $query);
/* echo "<script type='javascript'>alert('Curso inserido com Sucesso');";
echo "javascript:window.location='index.php';</script>"; */
pg_close($con);
header("Location: ./selecionar.php");
?>

