<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('../../class/Curso.php');
$cod = intval($_GET['cod']);
$CursoDao=new CursoDao();
$curso1=$CursoDao->buscarCurso($cod);
$CursoDao->deletar($curso1);
header("Location: ./selecionar.php");
