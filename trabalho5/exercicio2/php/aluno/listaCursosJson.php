<?php
require_once('../../class/Curso.php');

$CursoDao = new CursoDao();
$cursos = $CursoDao->listaCurso();

$jsCursos= json_encode($cursos);

echo $jsCursos;
?>