<?php
 require_once('../class/dependente.php');
 $cod = intval($_GET['cod']);
 $dependenteDao=new dependenteDAO();
 $dep=$dependenteDao->buscarDep($cod);
 $dependenteDao->deletar($dep);
 

header("Location: mostrarDep.php");
?>

