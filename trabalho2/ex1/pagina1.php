<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>página 1</title>
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
    <h1 class="azul">Página 1 – informações do usuários</h1>

</header>

<main class="container">


    <body>

    <?php
        session_start(); 
        session_destroy();
        session_start(); 
        echo "
        <form action='pagina2.php' method='post'>
            <div class='form-container'>
            Nome: <input type='text' name='nome'><br>
            Data de nascimento: <input type='date' name='nascimento'><br>
            Profissão: <input type='text' name='profissao'><br><br>
            </div>
            <hr>
            <br>
            <input type='submit'>
        </form>"
    ?> 


    </body>
   
</main>

</html>