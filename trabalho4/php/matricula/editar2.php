<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('../../class/Matricula.php');
$codigo = $_POST['cod'];
$aluno = $_POST['aluno'];
$curso = $_POST['curso'];

$matdao = new MatriculaDao();
$aludao = new AlunoDao();
$curdao = new CursoDao();
$mat1 = new Matricula();

$mat1->setCod($codigo);
$mat1->setAluno($aludao->buscarAluno($aluno));
$mat1->setCurso($curdao->buscarCurso($curso));

$matdao->alterar($mat1);



header("Location: ./selecionar.php");

?>


