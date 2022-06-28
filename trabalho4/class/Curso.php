<?php
require_once(__DIR__.'/conecta.php');
class Curso {
    private $cod;
    private $sala;
    private $professor;
    private $nome_turma;

    public function __construct($sala, $professor, $nome_turma){
        $this->sala = $sala;
        $this->professor = $professor;
        $this->nome_turma = $nome_turma;
    }
    public function getCod(){
        return $this->cod;
    }
    public function getSala(){
        return $this->sala;
    }  
    public function getProfessor(){
        return $this->professor;
    }      
    public function getNomeTurma(){
        return $this->nome_turma;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setProfessor($professor){
        $this->professor = $professor;
    }
    public function setCod($cod){
        $this->cod = $cod;
    } 
    public function setNomeTurma($nome_turma){
        $this->email = $nome_turma;
    }   
}

class CursoDao extends DAO {    
    
    public function inserir($curso)
    {
        $con=$this->conectaBD(); 
        $sql = 'INSERT INTO "Curso"' . " (sala,professor,nome_turma) values (?,?,?)";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$curso->getSala());
        $stm->bindValue(2,$curso->getProfessor());
        $stm->bindValue(3,$curso->getNomeTurma());
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }

    public function deletar($curso){
        $con = $this->conectaBD();
        $sql = 'DELETE FROM "Curso"'. "where codigo=?;  ";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$curso->getCod());       
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }

    public function alterar($curso){
        $con=$this->conectaBD();
        $sql='UPDATE "Curso"' . " SET sala =?, professor=?, nome_turma= ? WHERE codigo =?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$curso->getSala());
        $stm->bindValue(2,$curso->getProfessor());
        $stm->bindValue(3,$curso->getNomeTurma());
        $stm->bindValue(4,$curso->getCod());
        $result = $stm->execute();        
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
    }

    public function listaCurso(){
        $con = $this->conectaBD();
        $sql = 'SELECT * FROM "Curso"'." order by 1";
        $stm = $con->prepare($sql);
        $tabela=$stm->execute();
        $cursos = array();
        if($tabela){	
            while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
                $curso2 = new Curso($linha['sala'],$linha['professor'],$linha['nome_turma']);
                $curso2->setCod(intval($linha['codigo']));
                array_push($cursos,$curso2);
            }
        }
        $stm->closeCursor();
        $stm=NULL;
        $con = NULL;
        return $cursos;
    }

    public function buscarCurso($cod){
        $con = $this->conectaBD();
        $sql = 'SELECT * FROM "Curso"'." WHERE codigo = ?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$cod);
        $tabela = $stm->execute();
        if($tabela ){
            $linha = $stm->fetch(PDO::FETCH_ASSOC);
            $curso2 = new Curso($linha['sala'],$linha['professor'],$linha['nome_turma']);
            $curso2->setCod(intval($linha['codigo']));
        }
        $stm->closeCursor();
        $stm=NULL;
        $con = NULL;
        return $curso2;
    } 

}
?>