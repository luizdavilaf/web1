<?php
include('../../funcoes/conectar.php');
$con = conectar();
?>
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
      <h2> Inserir Matrículas</h2>

      <main class="container p-3 my-3 bg-dark text-white-50">

        <body>
          <form action="inserir.php" method="post">
            <div class="form-container">
              Aluno:
              <select name="aluno">
                <?php
                $query = 'SELECT * FROM "Aluno"' . " order by 1";
                $result = pg_query($con, $query);
                while ($row = pg_fetch_assoc($result)) {
                  $codigoaluno = $row['codigo'];
                  $nome = $row['nome'];
                  echo "<option value='$codigoaluno'>Código: $codigoaluno  - Nome: $nome  </option>";
                }
                ?>
              </select>
              <br>Curso:
              <select name="curso">
                <?php
                $query = 'SELECT * FROM "Curso"' . " order by 1";
                $result = pg_query($con, $query);
                while ($row = pg_fetch_assoc($result)) {
                  $codigocurso = $row['codigo'];
                  $sala = $row['sala'];
                  $professor = $row['professor'];
                  $nome_turma = $row['nome_turma'];
                  echo "<option value='$codigocurso'>Código: $codigocurso - Professor: $professor - Turma: $nome_turma</option>";
                }
                ?>
              </select>
              <hr>
              <br>
              <input type="submit">
            </div>
          </form>

    </div>

  </body>
  </main>
  <?php

  include_once('../../include/footer.html');
  ?>

</div>

</html>