<?php
require_once('../class/conecta.php');
require_once('../class/cliente.php');
class Dependente {
    private $cod;
    private $nome;
    private $relacao;
    private $cliente;

    public function __construct($nome, $relacao){
        $this->nome = $nome;
        $this->relacao = $relacao;
    }
    public function getCod(){
        return $this->cod;
    }
    public function getNome(){
        return $this->nome;
    }  
    public function getCliente(){
        return $this->cliente;
    }  
    public function getRelacao(){
        return $this->relacao;
    }     
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function setRelacao($relacao){
        $this->relacao = $relacao;
    }
    public function setCod($cod){
        $this->cod = $cod;
    }    
}
class dependenteDao extends DAO {
    public function inserir($dependente){
        $con=$this->conectaBD(); 
        $sql = "INSERT INTO dependente (cliente, nome, relacao) VALUES (?, ?, ?)";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$dependente->getCliente()->getCod());
        $stm->bindValue(2,$dependente->getNome());
        $stm->bindValue(3,$dependente->getRelacao());
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }
    public function deletar($dependente){
        $con = $this->conectaBD();
        $sql = "DELETE FROM dependente WHERE codigo = ?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$dependente->getCod());
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }
    public function alterar($dependente){
        $con=$this->conectaBD();
        $sql="UPDATE dependente SET cliente = ?, nome = ?, relacao = ? WHERE codigo = ? ";

        $stm = $con->prepare($sql);
        $stm->bindValue(1,$dependente->getCliente()->getCod());
        $stm->bindValue(2,$dependente->getNome());
        $stm->bindValue(3,$dependente->getRelacao());
        $stm->bindValue(4,$dependente->getCod());
        $result = $stm->execute();
        
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
    }

    
    public function listaDependentes(){
        $con = $this->conectaBD();
        $depDao= new dependenteDao;
        $cliDao= new clienteDao;

        $sql = "SELECT * FROM dependente";
        $stm = $con->prepare($sql);
        $tabela=$stm->execute();

        $dependentes = array();
        if($tabela){	
            while($linha = $stm->fetch(PDO::FETCH_ASSOC)){
                $dep = new Dependente($linha['nome'],$linha['relacao']);
                $dep->setCod(intval($linha['codigo']));
                $dep->setCliente($cliDao->buscarCli($linha['cliente']));
                
                array_push($dependentes,$dep);
            }
        }
        $stm->closeCursor();
        $stm=NULL;
        $con = NULL;
        return $dependentes;
    }

    public function buscarDep ($cod){
    
        $con = $this->conectaBD();
        $cliDao= new clienteDao;
        $sql = "SELECT * FROM dependente WHERE codigo = ?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1,$cod);
        $tabela = $stm->execute();
        if($tabela ){
            $linha = $stm->fetch(PDO::FETCH_ASSOC);
            $dep = new Dependente($linha['nome'],$linha['relacao']);
            $dep->setCod(intval($linha['codigo']));
            $dep->setCliente($cliDao->buscarCli($linha['cliente']));
        }
        $stm->closeCursor();
        $stm=NULL;
        $con = NULL;
        return $dep;
    } 
}
?>