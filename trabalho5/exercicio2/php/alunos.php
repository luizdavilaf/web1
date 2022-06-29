<?php

require_once('./conecta.php');
$con = conectaBD();
$sql = 'SELECT * FROM "Aluno"'." order by 1";
$stm = $con->prepare($sql);
$tabela=$stm->execute();

$alunos = array();
if($tabela){	
    while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
        array_push($alunos,$linha);     
    }
} 
$stm->closeCursor();
$stm=NULL;
$con = NULL;

$jsAlunos= json_encode($alunos);
echo $jsAlunos;

?>
