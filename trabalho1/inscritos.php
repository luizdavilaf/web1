<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>trabalho1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>  
</head>
<header class="jumbotron">
            <h1 class="azul">Página de Inscritos</h1>
            
    </header>

<body>
    <main class="container">
        <?php
            $inscritos=$_POST["inscritos"];
            echo "<table class='table table-dark'><tr><td><b>Inscritos</b></td></tr>";
            foreach($inscritos as $inscrito) 
            { 
                echo "<tr><td> $inscrito </td></tr>"; 
            }
            echo "</table>"; 
	    ?>                     
    </main>
</body>
</html>






