<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Letras de Musicas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <div id="wrapper">
        <body class="body p-3 my-3 bg-dark text-white-50">
            <header class="jumbotron bg-secondary text-white">                
                <div class="texto">
                    <h1 > Letras de músicas</h1>                
                </div>
            </header>           
            <div class='tudo'>
                <main class="container p-3 my-3 bg-dark text-white-50">    
                    <div class="container">                        
                        <?php echo "" . $_POST["nome"];  ?>                       
                    </div>
                </main>
            </div> 
        </body>
    </div>
    <footer class="bg-secondary text-white">
        <div class="container">2022 todos direitos reservados</div></footer>


        
</html>