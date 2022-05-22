<?php
function conectar()
{
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$servername = "127.0.0.1";
$port = "";
$username = "postgres";
$password = "postgres";
$dbname = "matricula";
$string="host=$servername dbname=$dbname  user=$username password=$password";

$con = pg_connect($string);
if (!$con) {
        print("Falha na conexão.");
        exit;
    }

return $con;
    
 
}
?>
