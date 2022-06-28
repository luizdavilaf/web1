<?php

require_once('./conecta.php'); //adaptar ao seu bd

$con = conectaBD();
$sql = "SELECT * FROM cliente";
$stm = $con->prepare($sql);
$tabela=$stm->execute();
$clientes = array();
if($tabela){	
    while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
        array_push($clientes,$linha);
    }
} 
$stm->closeCursor();
$stm=NULL;
$con = NULL;

$jsCli= json_encode($clientes);
echo $jsCli;

?>
