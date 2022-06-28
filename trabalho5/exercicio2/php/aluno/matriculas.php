<?php

require_once('./conecta.php');
$con = conectaBD();

// se usasse o DAO seria muito mais facil
$sql = 'SELECT "Matricula".codigo as codigo, "Aluno".nome as aluno, "Curso".nome_turma as nome_turma   FROM "Matricula" join "Aluno" on "Matricula".aluno="Aluno".codigo join "Curso" on "Matricula".curso="Curso".codigo';
$stm = $con->prepare($sql);
$tabela=$stm->execute();

$matriculas = array();
if($tabela){	
    while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
        array_push($matriculas,$linha);     
    }
} 
$stm->closeCursor();
$stm=NULL;
$con = NULL;

$jsMatriculas= json_encode($matriculas);
echo $jsMatriculas;

?>
