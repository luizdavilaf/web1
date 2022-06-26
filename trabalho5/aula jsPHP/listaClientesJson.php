<?php
require_once('../class/cliente.php');

$clienteDao=new clienteDAO();
$clientesPhp=$clienteDao->listaClientes();

$jsCli= json_encode($clientesPhp);
// esta solução só funciona dentro de um sistema DAO, logo deve ser adaptado
//neste caso as propriedades do cliente devem ser do tipo public

echo $jsCli;


?>