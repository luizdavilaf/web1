<?php 
    $pessoas=array(
        0=>array("nome"=>"fulano", "idade"=> 27, "profissao"=>"professor"),
        1=>array("nome"=>"beltrano", "idade"=>29, "profissao"=>"engenheiro"),
        2=>array("nome"=>"ciclano", "idade"=>15, "profissao"=>"estudante"),
        3=>array("nome"=>"ze", "idade"=>13, "profissao"=>"estudante"),
        4=>array("nome"=>"ana", "idade"=>21, "profissao"=>"professor")
        );
    ?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>trabalho1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>  
</head>

<body>
    <main class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Profissão</th>        
                </tr>
            </thead>

            <tbody>
                <?php 
                    
                    foreach($pessoas as $pessoas) 
                    { 
                       echo "<tr><td>$pessoas[nome]</td>
                       <td>$pessoas[idade]</td>
                       <td>$pessoas[profissao]</td>
                       
                       </tr>" ;  
                    }
                ?>    
                    
               
            </tbody>    
        
        </table>
        
        

            
    </main>
</body>
</html>






