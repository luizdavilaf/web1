<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>página 4</title>
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
    <h1 class="azul">Página 4</h1>

</header>

<main class="container">

    <body>
        <?php
        session_start();
        $city = $_POST['cidade'];
        $end = $_POST['endereço'];
        $zip = $_POST['cep'];
        $_SESSION["cidade"] = $city;
        $_SESSION["endereço"] = $end;
        $_SESSION["cep"] = $zip;

        echo "Nome: ";
        echo $_SESSION["nome"];
        echo "<br>Data de nascimento: ";
        echo $_SESSION["nascimento"];
        echo "<br>Profissão: ";
        echo $_SESSION["profissao"];

        echo "<br>Título: ";
        echo $_SESSION["titulo"];
        echo "<br>Autor: ";
        echo $_SESSION["autor"];
        echo "<br>Código: ";
        echo $_SESSION["codigo"];

        echo "<br>Cidade: ";
        echo $_SESSION["cidade"];
        echo "<br>Endereço: ";
        echo $_SESSION["endereço"];
        echo "<br>CEP: ";
        echo $_SESSION["cep"];


        echo "<br>Deseja confirmar as informações?<br>";     

        echo "<form class='form-horizontal' action='final.php'>
        <button>Sim</button>
        <button formaction='pagina1.php'>Não</button>
        </form>";
        

        ?>






    </body>
</main>

</html>