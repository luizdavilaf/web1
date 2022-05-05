<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>página 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
     <style>
        .form-container {
            display: flex;
            flex-direction: column;            
        }        
        
    </style>

</head>

<header class="jumbotron">
    <h1 class="azul">Página 3 – Informações sobre o endereço de entrega</h1>

</header>

<main class="container">

<?php
session_start(); 
$tit = $_POST['titulo'];
$aut = $_POST['autor'];
$cod = $_POST['codigo'];
$_SESSION["titulo"]=$tit;
$_SESSION["autor"]=$aut;
$_SESSION["codigo"]=$cod;
?>
<body>
    <form action="pagina4.php" method="post">
        <div class="form-container">
            Cidade: <input type="text" name="cidade"><br>
            Endereço: <input type="text" name="endereço"><br>
            CEP: <input type="text" name="cep"><br>
        </div>
            <hr>       
            <input type="submit">
       
    </form>


    


</body>
</main>
</html>