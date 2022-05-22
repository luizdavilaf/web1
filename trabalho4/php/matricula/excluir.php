<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('../../class/Matricula.php');
$codigo =  intval($_GET["cod"]); 
$matDao = new MatriculaDao();
$mat1 = $matDao->buscarMatricula($codigo);
$matDao->deletar($mat1);
header("Location: ./selecionar.php");
