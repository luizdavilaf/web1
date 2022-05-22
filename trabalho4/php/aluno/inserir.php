<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('../../class/Aluno.php');
$nome= $_POST['nome'];
$email= $_POST['mail'];
$telefone= $_POST['telefone'];
$aluno1 = new Aluno($nome,$email,$telefone);
$alunodao = new AlunoDAO();
$alunodao->inserir($aluno1);
header("Location: ./selecionar.php");
?>
