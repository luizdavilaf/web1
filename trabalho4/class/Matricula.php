<?php
require_once(__DIR__ . '\conecta.php');
require_once(__DIR__ . '\Aluno.php');
require_once(__DIR__ . '\Curso.php');
class Matricula
{
    private $cod;
    private $aluno;
    private $curso;


    public function __construct()
    {
    }
    public function getCod()
    {
        return $this->cod;
    }
    public function getAluno()
    {
        return $this->aluno;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
    public function setCod($cod)
    {
        $this->cod = $cod;
    }
}

class MatriculaDao extends DAO
{

    public function inserir($matricula)
    {
        $con = $this->conectaBD();
        $sql = 'INSERT INTO "Matricula"' . " (aluno,curso) values (?,?)";
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $matricula->getAluno()->getCod());
        $stm->bindValue(2, $matricula->getCurso()->getCod());
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }

    public function deletar($matricula)
    {
        $con = $this->conectaBD();
        $sql = 'DELETE FROM "Matricula"' . "where codigo=?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $matricula->getCod());
        $res = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $res;
    }

    public function alterar($matricula)
    {
        $con = $this->conectaBD();
        $sql = 'UPDATE "Matricula"' . " SET aluno =?, curso=? WHERE codigo =?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $matricula->getAluno()->getCod());
        $stm->bindValue(2, $matricula->getCurso()->getCod());
        $stm->bindValue(3, $matricula->getCod());
        $result = $stm->execute();
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
    }

    public function listaMatriculas()
    {
        $con = $this->conectaBD();
        $aluDao = new AlunoDao;
        $curDao = new CursoDao;

        $sql = 'SELECT * FROM "Matricula"' . " order by 1";
        $stm = $con->prepare($sql);
        $tabela = $stm->execute();

        $matriculas = array();
        if ($tabela) {
            while ($linha = $stm->fetch(PDO::FETCH_ASSOC)) {
                $mat = new Matricula();
                $mat->setCod(intval($linha['codigo']));
                $mat->setAluno($aluDao->buscarAluno($linha['aluno']));
                $mat->setCurso($curDao->buscarCurso($linha['curso']));
                array_push($matriculas, $mat);
            }
        }
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $matriculas;
    }

    public function buscarMatricula($cod)
    {
        $con = $this->conectaBD();
        $aluDao = new AlunoDao;
        $curDao = new CursoDao;
        $sql = 'SELECT * FROM "Matricula"' . " WHERE codigo = ?";
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $cod);
        $tabela = $stm->execute();

        if ($tabela) {
            $linha = $stm->fetch(PDO::FETCH_ASSOC);
            $mat = new Matricula();
            $mat->setCod(intval($linha['codigo']));
            $mat->setAluno($aluDao->buscarAluno($linha['aluno']));
            $mat->setCurso($curDao->buscarCurso($linha['curso']));
        }
        $stm->closeCursor();
        $stm = NULL;
        $con = NULL;
        return $mat;
    }
}
