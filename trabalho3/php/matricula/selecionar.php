<?php
include('../../funcoes/conectar.php');
$con = conectar();
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
    $query = 'SELECT "Matricula".codigo as codigo, "Aluno".nome as aluno, "Curso".nome_turma as curso FROM "Matricula"'. ' join "Aluno" on ("Matricula".aluno="Aluno".codigo) join "Curso" on ("Matricula".curso="Curso".codigo) order by 1';
    $result = pg_query($con, $query);

    if ($result) {
      echo "<table class='table table-striped table-secondary'>";
      echo "<tr>";
      echo "<th>Código</th>";
      echo "<th>Nome Aluno</th>";
      echo "<th>Nome Turma</th>";      
      echo "<th>Editar</th>";
      echo "<th>Excluir</th>";
      echo "</tr>";

      while ($row = pg_fetch_assoc($result)) {
        $codigo = $row['codigo'];
        $aluno = $row['aluno'];
        $curso = $row['curso'];      
        echo "<tr>";
        echo "<td> $codigo </td>";
        echo "<td> $aluno </td>";
        echo "<td> $curso</td>";        
        echo "<td><a href='./editar.php?cod=$codigo' class='btn btn-warning'>Editar</a></td>";
        echo "<td><a href='./excluir.php?cod=$codigo' class='btn btn-danger'>Excluir</a></td>";
        echo "</tr>";
      }
      echo "</table>";
    }
    pg_close($con);
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