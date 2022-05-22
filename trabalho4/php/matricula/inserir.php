<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('../../class/Matricula.php');
$aluno = $_POST["aluno"];
$curso = $_POST["curso"];

$matDao = new MatriculaDao();
$aludao = new AlunoDao();
$curdao = new CursoDao();
$mat = new Matricula();
$mat->setAluno($aludao->buscarAluno($aluno));
$mat->setCurso($curdao->buscarCurso($curso));
$matDao->inserir($mat);

header("Location: ./selecionar.php");
?>

