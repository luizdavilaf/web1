<?php
require_once('../../class/Matricula.php');

$matriculaDao=new matriculaDao();
$matriculasPhp=$matriculaDao->listaMatriculas();

$jsMatriculas= json_encode($matriculasPhp);
// esta solução só funciona dentro de um sistema DAO, logo deve ser adaptado
//neste caso as propriedades do cliente devem ser do tipo public

echo $jsMatriculas;


?>