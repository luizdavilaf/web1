<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../../class/Aluno.php');
$AlunoDao = new AlunoDao();
$alunos = $AlunoDao->listaAlunos();
?>
<html lang="pt-br">
<head>
  <title>Selecionar Alunos</title>
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
    echo "<h2> Selecionar</h2>";    
      echo "<table class='table table-striped table-secondary'>";
      echo "<tr>";
      echo "<th>Código</th>";
      echo "<th>Nome</th>";
      echo "<th>Email</th>";
      echo "<th>Telefone</th>";
      echo "<th>Editar</th>";
      echo "<th>Excluir</th>";
      echo "</tr>";
      foreach ($alunos as $aluno) {
        $codigo = $aluno->getCod();
        $nome = $aluno->getNome();
        $email = $aluno->getEmail();
        $telefone = $aluno->getTelefone();
        echo "<tr>";
        echo "<td> $codigo </td>";
        echo "<td> $nome </td>";
        echo "<td> $email</td>";
        echo "<td> $telefone</td>";
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