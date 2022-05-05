


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
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                     <th> <?php echo "" . $_POST["nome"];  ?> </th> 
                            
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>Email</th>
                    <th> <?php echo "" . $_POST["email"];  ?> </th> 
            </tr>
                    <tr>
                        <th>Animais</th>
                       <th> <?php
                       $x=1;
                       $animais=$_POST["animais"];  
                       $tamanho=count($animais);

                            foreach($animais as $animal)                             
                            { 
                                if($x===$tamanho)
                                {
                                     echo "$animal";
                                }
                                else{
                                    echo "$animal, ";
                                }
                              $x++;  
                             } 
	   ?> </th> 
                    </tr> 
                   <tr>
                       <th>Salario</th>
                       <th> <?php echo "" . $_POST["salario"];  ?> </th> 
                    </tr>
                
                    
                    
                 
                    
                
            </tbody>    
            
        
        </table>

       
                    
                
           


       

            
    </main>
</body>
</html>






