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
}

?>