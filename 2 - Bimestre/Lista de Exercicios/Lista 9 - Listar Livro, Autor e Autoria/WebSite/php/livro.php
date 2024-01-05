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
}

?>