<?php
include_once 'conectarPR.php';

class Produto
{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    public function getId() {
        return $this->id;
    }

    public function setId($iid){
        $this->id = $iid;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($name) {
        $this->nome = $name;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoqui) {
        $this->estoque = $estoqui;
    }

    function listar()
    {
        try
        {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("Select * from produto order by nome");
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }
    catch(PDOException $exc) 
    {
        echo "Erro ao executar consulta. " . $exc->getMessage();
    }
  }

  function salvar()
  {
    try {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("insert into produto values (null,?,?)");
        @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
        if($sql->execute() == 1)
        {
            return "Registro salvo com sucesso!";
        }
        $this->conn = null;
    }
    catch(PDOException $exe) {
        echo "Erro ao salvar o registro. " . $exe->getMessage();
    }
  }
  function exclusao() {
    try {
        $this->conn = new Conectar();
        $sql = $this->conn->prepare("delete from produto where id = ?");
        @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR); // Corrected method name: bindParam()
        if ($sql->execute() == 1) {
            return "Excluido com sucesso!";
        } else {
            return "Erro na exclusão!";
        }
        $this->conn = null;
    } catch (PDOException $exe) {
        echo "Erro ao excluir. " . $exe->getMessage();
    }
}
}

?>