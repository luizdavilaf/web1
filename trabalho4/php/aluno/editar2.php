<?php
 ini_set('display_errors',1);
 ini_set('display_startup_errors',1);
 error_reporting(E_ALL);
require_once('../../class/Aluno.php');
$cod = intval($_POST['cod']);
$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$aluno1 = new Aluno($nome,$email,$telefone);
$aluno1->setCod($cod);
$alunodao = new AlunoDAO();
$alunodao->alterar($aluno1);
header("Location: ./selecionar.php");

?>

