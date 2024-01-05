<?php
include_once 'conectarAU.php';

class Livro
{
    private $Cod_Livro;
    private $Titulo;
    private $Categoria;
    private $ISBN;
    private $Idioma;
    private $QtdePag;
    private $conn;

    public function getCod_Livro() {
        return $this->Cod_Livro;
    }

    public function setCod_Livro($iCod_Livro){
        $this->Cod_Livro = $iCod_Livro;
    }

    public function getTitulo(){
        return $this->Titulo;
    }

    public function setTitulo($iTitulo) {
        $this->Titulo = $iTitulo;
    }

    public function getCategoria() {
        return $this->Categoria;
    }

    public function setCategoria($iCategoria) {
        $this->Categoria = $iCategoria;
    }

    public function getISBN() {
        return $this->ISBN;
    }

    public function setISBN($iISBN) {
        $this->ISBN = $iISBN;
    }

    public function getIdioma() {
        return $this->Idioma;
    }

    public function setIdioma($iIdioma) {
        $this->Idioma = $iIdioma;
    }

    public function getQtdePag() {
        return $this->QtdePag;
    }

    public function setQtdePag($iQtdePag) {
        $this->QtdePag = $iQtdePag;
    }

    function listar()
    {
        try
        {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("Select * from livro order by Cod_Livro");
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
        $sql = $this->conn->prepare("insert into livro values (null, ?, ?, ?, ?, ?)");
        @$sql->bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
        @$sql->bindParam(2, $this->getCategoria(), PDO::PARAM_STR);
        @$sql->bindParam(3, $this->getISBN(), PDO::PARAM_STR);
        @$sql->bindParam(4, $this->getIdioma(), PDO::PARAM_STR);
        @$sql->bindParam(5, $this->getQtdePag(), PDO::PARAM_INT);
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
        $sql = $this->conn->prepare("delete from livro where Cod_Livro = ?");
        @$sql->bindParam(1, $this->getCod_Livro(), PDO::PARAM_INT);
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