<?php
include_once '../conectarAU.php';

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
        if ($sql->execute()) {
            if ($sql->rowCount() > 0) {
                return "Excluído com sucesso!";
            } else {
                return "<span class='error-message'>Nenhum registro a ser excluído!</span>";
            }
        } else {
            return "<span class='error-message'>Erro na exclusão!</span>";
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
            $sql = $this->conn->prepare("select * from livro where Titulo like ?"); // Informei o ?
            @$sql->bindParam(1, $this->getTitulo(), PDO::PARAM_STR); // Inclui esta linha para definir o parametro
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
                $sql = $this->conn->prepare("select * from livro where Cod_Livro = ?"); // Informei o ? (parametro)
                @$sql->bindParam(1, $this->getCod_Livro(), PDO::PARAM_STR); // Inclui esta linha para definir
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
            $sql = $this->conn->prepare("update livro set Titulo = ?, Categoria = ?, ISBN = ?, Idioma = ?, QtdePag = ?  where Cod_Livro = ?");
            @$sql->bindParam(1, $this->getTitulo(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCategoria(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getISBN(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getIdioma(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getQtdePag(), PDO::PARAM_INT);
            @$sql->bindParam(6, $this->getCod_Livro(), PDO::PARAM_STR);
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