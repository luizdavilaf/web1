<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../../class/Curso.php');
$cod = intval($_GET['cod']);
$CursoDao = new CursoDao();
$curso1 = $CursoDao->buscarCurso($cod);
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
      <h2> Editar Cursos</h2>      
      <main class='container p-3 my-3 bg-dark text-white-50'>        
        <form action="./editar2.php" method="post">
          <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="cod" name="cod" value="<?php echo $curso1->getCod(); ?>" readonly>
          </div>
          <div class="form-group">
            <label for="sala">sala:</label>
            <input type="text" class="form-control" id="sala" name="sala" value="<?php echo $curso1->getSala(); ?>">
          </div>
          <div class="form-group">
            <label for="professor">professor:</label>
            <input type="text" class="form-control" id="professor" name="professor" value="<?php echo $curso1->getProfessor(); ?>">
          </div>
          <div class="form-group">
            <label for="nome_turma">nome_turma:</label>
            <input type="text" class="form-control" id="nome_turma" name="nome_turma" value="<?php echo $curso1->getNomeTurma(); ?>">
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