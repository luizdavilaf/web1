<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../../class/Matricula.php');
$MatriculaDao = new MatriculaDao();
$alunoDao = new AlunoDao();
$cursoDao = new CursoDao();
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
               $alunos=$alunoDao->listaAlunos();
               foreach($alunos as $aluno){
                 $codigoaluno = $aluno->getCod();
                 $nomealuno = $aluno->getNome();
                  echo "<option value='$codigoaluno'>Código: $codigoaluno  - Nome: $nomealuno  </option>";
                }
                ?>
              </select>
              <br>Curso:
              <select name="curso">
                <?php    
                $cursos=$cursoDao->listaCurso();
                foreach($cursos as $curso){
                  $codigocurso = $curso->getCod();
                  $nometurma = $curso->getNomeTurma();
                  $sala = $curso->getSala();
                  $professor = $curso->getProfessor();
                  echo "<option value='$codigocurso'>Código: $codigocurso - Professor: $professor - Turma: $nometurma - Sala: $sala</option>";
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