<?php
include_once 'conectar.php';

class Porto
{
    private $Nome;
    private $Sobrenome;
    private $Rua;
    private $Redencia;
    private $Cep;
    private $Bairro;

    public function getNome(){
        return $this->Nome;
    }

    public function setNome($iNome) {
        $this->Nome = $iNome;
    }

    public function getSobrenome() {
        return $this->Sobrenome;
    }

    public function setSobrenome($iSobrenome) {
        $this->Sobrenome = $iSobrenome;
    }

    public function getRua() {
        return $this->Rua;
    }

    public function setRua($iRua) {
        $this->Rua = $iRua;
    }

    public function getRedencia() {
        return $this->Redencia;
    }

    public function setRedencia($iRedencia) {
        $this->Redencia= $iRedencia;
    }

    public function getCep() {
        return $this->Cep;
    }

    public function setCep($iCep) {
        $this->Cep= $iCep;
    }

    public function getBairro() {
        return $this->Bairro;
    }

    public function setBairro($iBairro) {
        $this->Bairro= $iBairro;
    }



    function listar()
    {
        try
        {
        $this-> conn = new Conectar();
        $sql = $this->conn->query("SELECT * FROM porto ORDER BY Nome");
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