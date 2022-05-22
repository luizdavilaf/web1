<html lang="pt-br">
<head>
    <title>Index</title>
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
        <main class="container p-3 my-3 bg-dark text-white-50">

            <form class='form-horizontal'>
                <div class="form-group">
                    <button class="btn btn-primary" formaction='./inserir1.php'>Inserir Alunos</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-secondary" formaction='./selecionar.php'>Selecionar Alunos</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning" formaction='./selecionar.php'>Editar Alunos</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" formaction='./excluir.php'>Excluir Alunos</button>
                </div>
            </form>
        </main>
    </body>
    <?php
    include_once('../../include/footer.html');
    ?>
</div>

</html>