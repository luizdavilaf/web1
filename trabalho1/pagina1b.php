
<?php 
    $pessoas=array(
        0=>array("nome"=>"fulano", "idade"=> 27, "profissao"=>"professor"),
        1=>array("nome"=>"beltrano", "idade"=>29, "profissao"=>"engenheiro"),
        2=>array("nome"=>"ciclano", "idade"=>15, "profissao"=>"estudante"),
        3=>array("nome"=>"ze", "idade"=>13, "profissao"=>"estudante"),
        4=>array("nome"=>"ana", "idade"=>21, "profissao"=>"professor")
        );

        $menores;
        $maiores;

        foreach($pessoas as $pessoa)
        {
            if($pessoa["idade"]<18)
            $menores[]= $pessoa;
            else{
                $maiores[]=$pessoa;
            }
        }
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
<header class="jumbotron">
            <h1 class="azul">Lista</h1>
            
    </header>

<body>
    <main class="container">

        <table class="table">
            <caption>Menores</caption>
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Profissão</th>        
                </tr>
            </thead>

            <tbody>
                <?php 
                    
                    foreach($menores as $menores) 
                    { 
                       echo "<tr><td>$menores[nome]</td>
                       <td>$menores[idade]</td>
                       <td>$menores[profissao]</td>
                       
                       </tr>" ;  
                    }
                ?>    
                    
                
            </tbody>    
            
        
        </table>

        <table class="table">
       <caption>Maiores</caption>
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Profissão</th>        
                </tr>
            </thead>

            <tbody>
                <?php 
                    
                    foreach($maiores as $maiores) 
                    { 
                       echo "<tr><td>$maiores[nome]</td>
                       <td>$maiores[idade]</td>
                       <td>$maiores[profissao]</td>
                       
                       </tr>" ;  
                    }
                ?>    
                    
                
            </tbody>    
            
        
        </table>



       

            
    </main>
</body>
</html>






