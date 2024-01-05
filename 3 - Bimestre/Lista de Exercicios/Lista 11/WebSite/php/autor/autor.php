<?php
include_once '../conectarAU.php';

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
        $sql = $this->conn->query("Select * from autor order by Cod_Autor");
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
        $sql = $this->conn->prepare("insert into autor values (null,?,?,?,?)");
        @$sql-> bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getEmail(), PDO::PARAM_STR);
        @$sql-> bindParam(4, $this->getNasc(), PDO::PARAM_STR);
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
        $sql = $this->conn->prepare("delete from autor where Cod_Autor = ?");
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
    function consultar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor where NomeAutor like ?"); // Informei o ?
            @$sql->bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR); // Inclui esta linha para definir o parametro
            //  @$sql->bindParam(1, $this->getNome()."%", PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exe) {
            echo "Erro ao executar consulta. " . $exe->getMessage();
        }
    }
    function alterar()
        {
            try{
                $this->conn = new Conectar();
                $sql = $this->conn->prepare("select * from autor where Cod_Autor = ?"); // Informei o ? (parametro)
                @$sql->bindParam(1, $this->getCod_Autor(), PDO::PARAM_STR); // Inclui esta linha para definir
                $sql->execute();
                return $sql->fetchAll();
                $this->conn = null;
            } catch (PDOException $exe) {
                echo "Erro ao alterar " . $exe->getMessage();
            }
        }

    function alterar2()
    {
        try{
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update autor set NomeAutor = ?, Sobrenome = ?, Email = ?, Nasc= ? where Cod_Autor = ?");
            @$sql-> bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getEmail(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getNasc(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getCod_Autor(), PDO::PARAM_STR);
            if($sql->execute() == 1) {
                return "Registro alterado com sucesso!";
            } else {
                return "Erro ao  alterado!";
            }
            $this->conn = null;
        } catch (PDOException $exe) {
            echo "Erro ao alterar registro. " . $exe->getMessage();
        }
    }
}

?>