<html lang="pt-br">

<head>
  <title>Inserir alunos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/estilo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
      <h2> Inserir Alunos</h2>

      <main class="container p-3 my-3 bg-dark text-white-50">

        <body>
          <form action="inserir.php" method="post">
            <div class="form-container">
              Nome: <input type="text" name="nome"><br>
              Email: <input type="email" name="mail"><br>
              Telefone: <input type="tel" name="telefone"><br>
            </div>
            <hr>
            <input type="submit">
          </form>
        </body>
      </main>
      <?php
      include_once('../../include/footer.html');
      ?>

    </div>

</html>