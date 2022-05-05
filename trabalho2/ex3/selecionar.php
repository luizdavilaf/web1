<?php
include("funcoes.php");

?>

<!DOCTYPE html>
<html>

<head>
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

    body {
      background-color: gray;
    }
  </style>
  <title>Selecionar</title>
</head>
<header class="jumbotron bg-dark text-white-50">
  <h1>Selecionar</h1>

</header>
<main class=" container-fluid p-3 my-3 bg-dark text-white-50">

  <body>

    <?php
    echo conectar();
    if (!$con) {
      print("Falha na conexão.");
      exit;
    }
    $query = 'SELECT * FROM "Aluno"';    
    $result = pg_query($con, $query);
    

    if ($result) {
      while ($row = pg_fetch_assoc($result)) {
        $codigo = $row['codigo'];
        $nome = $row['nome'];
        $email = $row['email'];
        $telefone = $row['telefone'];
        echo "Código:$codigo, Nome:$nome, Email:$email, Telefone: $telefone  <BR> ";
      }
    }
    
    
    pg_close($con);
    ?>
  </body>
</main>

</html>