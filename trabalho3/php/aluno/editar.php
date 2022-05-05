<?php
include('../../funcoes/conectar.php');
$con = conectar();
?>
<html lang="pt-br">

<head>
  <title>Editar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/estilo.css">
  <?php
  include_once('../../css/bootstrap.html');
  ?>


</head>

<div id="wrapper">

  <body class="body p-3 my-3 bg-dark text-white-50">
    <?php
    include_once('../../include/header.html');
    include_once('../../include/nav.html');
    ?>
    <div class='tudo'>
      <h2> Editar Alunos</h2>

      <main class='container p-3 my-3 bg-dark text-white-50'>
        <?php
        $codigo = $_GET["cod"];
        $query = 'SELECT * FROM "Aluno"' . " where codigo=$codigo";
        $result = pg_query($con, $query);
        if ($result) {
          while ($row = pg_fetch_assoc($result)) {
            $codigo = $row['codigo'];
            $nome = $row['nome'];
            $email = $row['email'];
            $telefone = $row['telefone'];
          }
        }
        ?>

        <form action="./editar2.php" method="post">
          <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="cod" name="cod" value="<?php echo $codigo; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>">
          </div>
          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <label for="telefone">telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>








      </main>
    </div>
  </body>
  <?php
  include_once('../../include/footer.html');
  ?>

</div>

</html>