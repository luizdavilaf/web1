<?php
require_once('../class/Aluno.php');

$alunoDao=new alunoDao();
$alunosPhp=$alunoDao->listaAlunos();

$jsAlunos= json_encode($alunosPhp);
// esta solução só funciona dentro de um sistema DAO, logo deve ser adaptado
//neste caso as propriedades do cliente devem ser do tipo public

echo $jsAlunos;


?>