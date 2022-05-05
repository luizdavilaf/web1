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
            <h1 class="azul">Página de Inscrição</h1>
            
    </header>

<body>
    <main class="container">
        <?php
            $quantidade=$_POST["numero"];  
            for ($i = 0; $i < $quantidade; $i++) {
            echo "<form action='inscritos.php' method='post'> 
            Nome: <input type='text' name='inscritos[]'><br> ";  
            }
            echo "<input type='submit' value='OK'> </form> ";
	    ?>                     
    </main>
</body>
</html>






