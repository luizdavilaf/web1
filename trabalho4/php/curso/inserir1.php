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
      <h2> Inserir Cursos</h2>
      <main class="container p-3 my-3 bg-dark text-white-50">

        <body>
          <form action="inserir.php" method="post">
            <div class="form-container">
              Sala: <input type="text" name="sala"><br>
              Professor: <input type="text" name="professor"><br>
              Nome da Turma: <input type="text" name="nome_turma"><br>
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
</div>

</html>