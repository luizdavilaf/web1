<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../../class/Matricula.php');
$matDao = new MatriculaDao();
$matriculas = $matDao->listaMatriculas();
?>
<html lang="pt-br">
<head>
  <title>Selecionar Matrículas</title>
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
    echo "<div class='tudo'>";
    echo "<h2> Selecionar Matrículas</h2>";
    echo "<main class='container p-3 my-3 bg-dark text-white-50'>";
      echo "<table class='table table-striped table-secondary'>";
      echo "<tr>";
      echo "<th>Código</th>";
      echo "<th>Nome Aluno</th>";
      echo "<th>Nome Turma</th>";
      echo "<th>Editar</th>";
      echo "<th>Excluir</th>";
      echo "</tr>";

      foreach($matriculas as $matricula) {
        $codigo = $matricula->getCod();
        $aluno = $matricula->getAluno()->getNome();
        $curso = $matricula->getCurso()->getNomeTurma();
        echo "<tr>";
        echo "<td> $codigo </td>";
        echo "<td> $aluno </td>";
        echo "<td> $curso</td>";
        echo "<td><a href='./editar.php?cod=$codigo' class='btn btn-warning'>Editar</a></td>";
        echo "<td><a href='./excluir.php?cod=$codigo' class='btn btn-danger'>Excluir</a></td>";
        echo "</tr>";
      }
      echo "</table>";
  
   
    ?>

    <br><br>
    <a href='./inserir1.php' class="btn btn-primary">Inserir</a>




    </main>
</div>
</body>
<?php
include_once('../../include/footer.html');
?>

</div>

</html>