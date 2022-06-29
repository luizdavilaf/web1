<?php
require_once('./conecta.php');
$con = conectaBD();
$sql = 'SELECT * FROM "Curso"'." order by 1";
$stm = $con->prepare($sql);
$tabela=$stm->execute();
$cursos = array();
if($tabela){	
    while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
        array_push($cursos,$linha);     
    }
} 
$stm->closeCursor();
$stm=NULL;
$con = NULL;
$jsCursos= json_encode($cursos);
echo $jsCursos;
?>
