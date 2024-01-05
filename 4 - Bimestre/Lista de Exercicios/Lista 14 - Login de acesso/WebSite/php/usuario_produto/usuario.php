<?php
include_once '../conectarPR.php';

class Usuario
{   
    private $cod_usu;
    private $usu; 
    private $senha;
    
    private $conn;

    public function getCod_Usuario() {
        return $this->cod_usu;
    }

    public function setCod_Usuario($cod_usu) {
        $this->cod_usu = $cod_usu;
    }

    public function getUsu() 
    {
        return $this->usu;
    }

    public function setUsu($usuario) {
        $this->usu = $usuario;
    }

    public function getSenha() {
        return $this->senha;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    function logar() 
    {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuario WHERE Login LIKE ? and Senha = ?");
            @$sql-> bindParam(1, $this->getUsu(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch(PDOException $exe) 
        {
            echo "<span class='green'>Erro ao executar consultar</span>" . $exe->getMessage();
        }
    }
    function salvar()
    {
      try {
          $this-> conn = new Conectar();
          $sql = $this->conn->prepare("INSERT into usuario values (null, ?,?)");
          @$sql-> bindParam(1, $this->getUsu(), PDO::PARAM_STR);
          @$sql-> bindParam(2, $this->getSenha(), PDO::PARAM_STR);
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
    function alterar()
    {
        try{
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * from usuario where cod_usuario = ?"); // Informei o ? (parametro)
            @$sql->bindParam(1, $this->getCod_Usuario(), PDO::PARAM_STR); // Inclui esta linha para definir
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
            $sql = $this->conn->prepare("UPDATE usuario set login = ?, senha = ? where cod_usuario = ?");
            @$sql->bindParam(1, $this->getUsu(), PDO::PARAM_STR); 
            @$sql->bindParam(2, $this->getSenha(), PDO::PARAM_STR);  
            @$sql->bindParam(3, $this->getCod_Usuario(), PDO::PARAM_STR); 
            if($sql->execute() == 1) {
                return "Registro alterado com sucesso!";
            
            } else {
                return "Erro no registro";
            }
            $this->conn = null;
        } catch (PDOException $exe) {
            echo "Erro ao alterar registro. " . $exe->getMessage();
        }
    }

    function exclusao() {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("DELETE from usuario where cod_usuario = ?");
            @$sql->bindParam(1, $this->getCod_Usuario(), PDO::PARAM_STR); // Corrected method name: bindParam()
            if ($sql->execute() == 1) {
                echo "<script>mostrarMensagemExclusao('Excluído com sucesso!', true);</script>";
            } else {
                echo "<script>mostrarMensagemExclusao('Erro na exclusão!', false);</script>";
            }
            $this->conn = null;
        } catch (PDOException $exe) {
            echo "Erro ao excluir. " . $exe->getMessage();
        }
    }
        function exclusaoerro() {
            try {
                $this->conn = new Conectar();
                $sql = $this->conn->prepare("SELECT * from usuario where cod_usuario = ?"); // Informei o ? (parametro)
                @$sql->bindParam(1, $this->getCod_Usuario(), PDO::PARAM_STR); // Corrected method name: bindParam()
                if ($sql->execute() == 1) {
                    echo "<script>mostrarMensagemCancelamento('Operação de exclusão cancelada.!', true);</script>";
                } else {
                    echo "<script>mostrarMensagemCancelamento('Erro na exclusão!', false);</script>";
                }
                $this->conn = null;
            } catch (PDOException $exe) {
                echo "Erro ao excluir. " . $exe->getMessage();
            }
            }
        }
    
    ?>
    
    <script>
    function mostrarMensagemExclusao(mensagem, sucesso) {
        var mensagemDiv = document.getElementById('mensagem-exclusao');
        mensagemDiv.innerHTML = mensagem;
    
        if (sucesso) {
            mensagemDiv.style.backgroundColor = 'transparent';
            mensagemDiv.style.marginTop = '-25px';
        } else {
            mensagemDiv.style.backgroundColor = 'transparent';
            mensagemDiv.style.marginTop = '-25px';
        }
    
        mensagemDiv.style.display = 'block';
    
        setTimeout(function() {
            mensagemDiv.style.display = 'none';
        }, 3000); // Ocultará a mensagem após 3 segundos
    }
    
    function mostrarMensagemCancelamento() {
        var mensagemDiv = document.getElementById('mensagem-exclusao');
        mensagemDiv.innerHTML = 'Operação de exclusão cancelada.';
        mensagemDiv.style.backgroundColor = 'transparent';
        mensagemDiv.style.marginTop = '-25px';
        mensagemDiv.style.display = 'block';
        mensagemDiv.style.color = "red";
    
        setTimeout(function() {
            mensagemDiv.style.display = 'none';
        }, 3000); // Ocultará a mensagem após 3 segundos
    }
    </script>