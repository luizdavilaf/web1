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
      <h2> Editar Matriculas</h2>

      <main class='container p-3 my-3 bg-dark text-white-50'>
        <?php
        $codigo = $_GET["cod"];

        $query = 'SELECT "Matricula".codigo as codigo, "Matricula".aluno as codaluno, "Matricula".curso as codcurso, "Aluno".nome as aluno, 
        "Curso".nome_turma as curso 
        FROM "Matricula"' . ' join "Aluno" on ("Matricula".aluno="Aluno".codigo) join "Curso" on ("Matricula".curso="Curso".codigo)' . ' where "Matricula"' . ".codigo=$codigo";
        $result = pg_query($con, $query);
        if ($result) {
          while ($row = pg_fetch_assoc($result)) {
            $codigo = $row['codigo'];
            $aluno = $row['aluno'];
            $curso = $row['curso'];
            $codaluno = $row['codaluno'];
            $codcurso = $row['codcurso'];
          }
        }
        ?>
        <div class="form-container">
          <form action="./editar2.php" method="post">
            <div class="form-group">
              <label for="codigo">Código:</label>
              <input type="text" class="form-control" id="cod" name="cod" value="<?php echo $codigo; ?>" readonly>
            </div>
            <div class="form-group">
              <div class='form-container'>
                Aluno:
                <select name="aluno">
                  <?php

                  echo "<option selected value='$codaluno'> Código: $codaluno Nome: $aluno </option>";
                  $query = 'SELECT * FROM "Aluno"' . " where codigo!=$codaluno order by 1";
                  $result = pg_query($con, $query);

                  while ($row = pg_fetch_assoc($result)) {
                    $codigoaluno = $row['codigo'];
                    $nome = $row['nome'];
                    echo "<option value='$codigoaluno'>Código: $codigoaluno  - Nome: $nome  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class='form-container'>
                Curso:
                <select name="curso">
                  <?php

                  echo "<option selected value='$codcurso'> Código: $codcurso Turma: $curso </option>";
                  $query = 'SELECT * FROM "Curso"' . " where codigo!=$codcurso order by 1";
                  $result = pg_query($con, $query);

                  while ($row = pg_fetch_assoc($result)) {
                    $codigocurso = $row['codigo'];
                    $nome = $row['nome_turma'];
                    echo "<option value='$codigoaluno'>Código: $codigocurso  - Turma: $nome  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </main>
    </div>
  </body>
  <?php
  include_once('../../include/footer.html');
  ?>

</div>

</html>

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