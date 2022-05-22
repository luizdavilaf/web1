<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('../../class/Curso.php');
$cod = intval($_POST['cod']);
$sala= $_POST['sala'];
$professor= $_POST['professor'];
$nome_turma= $_POST['nome_turma'];
$curso1 = new Curso($sala,$professor,$nome_turma);
$curso1->setCod($cod);
$cursodao = new CursoDao();
$cursodao->alterar($curso1);
header("Location: ./selecionar.php");

?>


