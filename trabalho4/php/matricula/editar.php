<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../../class/Matricula.php');
$cod = intval($_GET['cod']);
$MatriculaDao = new MatriculaDao();
$alunoDao = new AlunoDao();
$cursoDao = new CursoDao();
$mat = $MatriculaDao->buscarMatricula($cod);
$codmat = $mat->getCod();
$codaluno = $mat->getAluno()->getCod();
$codCurso = $mat->getCurso()->getCod();
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
        <div class="form-container">
          <form action="./editar2.php" method="post">
            <div class="form-group">
              <label for="codigo">Código:</label>
              <input type="text" class="form-control" id="cod" name="cod" value="<?php echo $codmat; ?>" readonly>
            </div>
            <div class="form-group">
              <div class='form-container'>
                Aluno:
                <select name="aluno">
                  <?php
                  $alunos = $alunoDao->listaAlunos();
                  foreach ($alunos as $aluno) {
                    $codigoaluno = $aluno->getCod();
                    $nomealuno = $aluno->getNome();
                    if ($codigoaluno == $codaluno) {
                      echo "<option selected value='$codigoaluno'> Código: $codigoaluno Nome: $nomealuno </option>";
                    } else {
                      echo "<option value='$codigoaluno'> Código: $codigoaluno Nome: $nomealuno </option>";
                    }
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
                  $cursos = $cursoDao->listaCurso();
                  foreach ($cursos as $curso) {
                    $codigocurso = $curso->getCod();
                    $nometurma = $curso->getNomeTurma();
                    $sala = $curso->getSala();
                    $professor = $curso->getProfessor();
                    if ($codigocurso == $codCurso) {
                      echo "<option selected value='$codigocurso'> Código: $codigocurso Turma: $nometurma
                      Sala: $sala Professor: $professor </option>";
                    } else {
                      echo "<option value='$codigocurso'> Código: $codigocurso Turma: $nometurma
                      Sala: $sala Professor: $professor </option>";
                    }
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