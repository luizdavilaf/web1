<?php
 ini_set('display_errors',1);
 ini_set('display_startup_errors',1);
 error_reporting(E_ALL);
require_once('../../class/Aluno.php');
$cod = intval($_GET['cod']);
$AlunoDao=new AlunoDAO();
$aluno1=$AlunoDao->buscarAluno($cod);
$AlunoDao->deletar($aluno1);


header("Location: ./selecionar.php");

?>
