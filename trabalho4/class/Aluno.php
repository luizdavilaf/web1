<?php
require_once(__DIR__.'\conecta.php');
class Aluno {
    private $cod;
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    public function getCod(){
        return $this->cod;
    }
    public function getNome(){
        return $this->nome;
    }  
    public function getEmail(){
        return $this->email;
    }      
    public function getTelefone(){
        return $this->telefone;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCod($cod){
        $this->cod = $cod;
    } 
    public function setTelefone($telefone){
        $this->email = $telefone;
    }   
}

class AlunoDao extends DAO {    
    
    public function inserir($aluno)
    {
        $con=$this->conectaBD(); 
        $sql = 'INSERT INTO public."Aluno"' . " (nome,email,telefone) values (?,?,?)";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$aluno->getNome());
        $stm->bindValue(2,$aluno->getEmail());
        $stm->bindValue(3,$aluno->getTelefone());
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }

    public function deletar($aluno){
        $con = $this->conectaBD();
        $sql = 'DELETE FROM "Aluno"'. "where codigo=?;" ; 
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$aluno->getCod());        
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }

    public function alterar($aluno){
        $con=$this->conectaBD();
        $sql='UPDATE "Aluno"' ." SET nome =?, email=?, telefone= ? WHERE codigo =?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$aluno->getNome());
        $stm->bindValue(2,$aluno->getEmail());
        $stm->bindValue(3,$aluno->getTelefone());
        $stm->bindValue(4,$aluno->getCod());
        $result = $stm->execute();        
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
    }

    public function listaAlunos(){
        $con = $this->conectaBD();
        $sql = 'SELECT * FROM "Aluno"'." order by 1";
        $stm = $con->prepare($sql);
        $tabela=$stm->execute();
        $alunos = array();
        if($tabela){	
            while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
                $aluno2 = new Aluno($linha['nome'],$linha['email'],$linha['telefone']);
                $aluno2->setCod(intval($linha['codigo']));
                array_push($alunos,$aluno2);
            }
        }
        $stm->closeCursor();
        $stm=NULL;
        $con = NULL;
        return $alunos;
    }

    public function buscarAluno($cod){
        $con = $this->conectaBD();
        $sql = 'SELECT * FROM "Aluno"'." WHERE codigo = ?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$cod);
        $tabela = $stm->execute();
        if($tabela ){
            $linha = $stm->fetch(PDO::FETCH_ASSOC);
            $aluno2 = new Aluno($linha['nome'],$linha['email'],$linha['telefone']);
            $aluno2->setCod(intval($linha['codigo']));
        }
        $stm->closeCursor();
        $stm=NULL;
        $con = NULL;
        return $aluno2;
    } 

}
?>