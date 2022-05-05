<?php



include("funcoes.php");
echo conectar();
if (!$con) {
    print("Falha na conexão.");
    exit;
}

//montar string com os dados do form    
$nome = $_POST["nome"];
$email = $_POST["mail"];
$telefone = $_POST["telefone"];
$query = 'INSERT INTO "Aluno"' ." (nome,email,telefone) values ('$nome','$email','$telefone')";



//echo $query;
// echo "<br>";
//inserir


pg_query($con, $query);
echo "Inserção feita";

pg_close($con);
?>
</body>

</html>