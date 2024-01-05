<?php
include_once 'conectarAU.php';

class Autoria
{
    private $Cod_Autor;
    private $Cod_Livro;
    private $DataLancamento;
    private $Editora;
    private $conn;


    public function getCod_Autor(){
        return $this->Cod_Autor;
    }

    public function setCod_Autor($iCod_Autor) {
        $this->Cod_Autor = $iCod_Autor;
    }

    public function getCod_Livro() {
        return $this->Cod_Livro;
    }

    public function setCod_Livro($iCod_Livro) {
        $this->Cod_Livro = $iCod_Livro;
    }

    public function getDataLancamento() {
        return $this->DataLancamento;
    }

    public function setDataLancamento($iDataLancamento) {
        $this->DataLancamento = $iDataLancamento;
    }

    public function getEditora() {
        return $this->Editora;
    }

    public function setEditora($iEditora) {
        $this->Editora = $iEditora;
    }

    function listar()
    {
        try
        {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("Select * From autoria order by Cod_Autor");
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
        $this->conn = new Conectar();
        $sql = $this->conn->prepare("insert into autoria VALUES (null,?, ?, ?)");
        @$sql->bindParam(1, $this->getCod_Livro(), PDO::PARAM_STR);
        @$sql->bindParam(2, $this->getDataLancamento(), PDO::PARAM_STR);
        @$sql->bindParam(3, $this->getEditora(), PDO::PARAM_STR);
        if($sql->execute() == 1)
        {
            return "Registro salvo com sucesso!";
        }
        $this->conn = null;
    } catch (PDOException $exe) {
        echo "Erro ao salvar o registro. " . $exe->getMessage();
    }
}
function exclusao() {
    try {
        $this->conn = new Conectar();
        $sql = $this->conn->prepare("delete from autoria where Cod_Autor = ?");
        @$sql->bindParam(1, $this->getCod_Autor(), PDO::PARAM_STR); // Corrected method name: bindParam()
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