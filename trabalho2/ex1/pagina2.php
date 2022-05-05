<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>página 2</title>
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
    <h1 class="azul">Página 2 – Informações sobre o produto</h1>

</header>

<main class="container">

<?php
session_start(); 

$name = $_POST['nome'];
$nasc = $_POST['nascimento'];
$prof = $_POST['profissao'];
$_SESSION["nome"]=$name;
$_SESSION["nascimento"]=$nasc;
$_SESSION["profissao"]=$prof;

?>

<body>
    <form action="pagina3.php" method="post">
        <div class="form-container">
            Título: <input type="text" name="titulo"><br>
            Autor: <input type="text" name="autor"><br>
            Código: <input type="text" name="codigo"><br>
        </div>
            <hr>       
            <input type="submit">       
    </form>
</body>
</main>
</html>