<?php
include_once 'conectarAU.php';

class Autor
{
    private $Cod_Autor;
    private $NomeAutor;
    private $Sobrenome;
    private $Email;
    private $Nasc;
    private $conn;

    public function getCod_Autor() {
        return $this->Cod_Autor;
    }

    public function setCod_Autor($iCod_Autor){
        $this->Cod_Autor = $iCod_Autor;
    }

    public function getNomeAutor(){
        return $this->NomeAutor;
    }

    public function setNomeAutor($iNomeAutor) {
        $this->NomeAutor = $iNomeAutor;
    }

    public function getSobrenome() {
        return $this->Sobrenome;
    }

    public function setSobrenome($iSobrenome) {
        $this->Sobrenome = $iSobrenome;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($iEmail) {
        $this->Email = $iEmail;
    }

    public function getNasc() {
        return $this->Nasc;
    }

    public function setNasc($iNasc) {
        $this->Nasc= $iNasc;
    }

    function listar()
    {
        try
        {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("SELECT * FROM autor ORDER BY Cod_Autor");
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