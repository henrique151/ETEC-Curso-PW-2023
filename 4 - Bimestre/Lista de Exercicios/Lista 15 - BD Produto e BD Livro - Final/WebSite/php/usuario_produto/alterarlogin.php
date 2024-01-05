<!DOCTYPE html>

<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../../script/script1.js"></script>
    <link rel="stylesheet" href="../../css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Tela de Login</title>
    <script language="javascript">
        function blokletras(keypress) {
            // Campo senha - bloqueia letras

            if (keypress >= 48 && keypress <= 57) {
                return true;
            } else {
                return false
            }

        }
    </script>
</head>

<style>

.messagem-green {
    text-align: center;
    color: #5cb85c;
    font-size: 1.2rem;
    margin-bottom: 1rem;
}

span {
    font-size: 1.3rem;
}

span .erro-red {
    color: #d9534f;
}

.card {
    width: 550px;
    height: 36%;
    z-index: 9999;
    transition: all ease 250ms;
}

.clear {
    margin-top: 0.8rem;
}

 .botaos .botao {
     display: flex;
    width: 100%;
    gap:9.7rem;
 
}  

/* .botaos .botao {
    position: relative;
    left: 30%;
    display: flex;
    flex-direction: column; 
    width: 40%;
    gap: 0.25rem;
} */

.link-container a {
    position: relative;
    text-align: center;
    padding: 10px;
    margin: 10px;
    border: 2px solid transparent;
    border-radius: 5px;
    text-decoration: none;
    width: 200px;
    text-align: center;
    border-radius: 5rem;
}

.link-container.blue-bg {
    background-color: #007bff;
    border-radius: 5rem;
    margin-top: 0.5rem;
    transition: all ease 300ms;
}

.link-container.orange-bg {
    margin-top: 0.5rem;
    background-color:#007bff;
    border-radius: 5rem;
    transition: all ease-in-out 300ms;
}

.link-container.blue-bg:hover {
    background-color: #517fa4;
    transition: all ease 300ms;
}

.link-container.orange-bg:hover {
    background-color: #517fa4;
    transition: all ease-in-out 300ms;
}
.messagem {
    font-size: 1.3rem;
    margin-top: 0.6rem;
    color: #6bfc03;
}

.button-2 {
    cursor: pointer;
    display: inline-flex;
    align-items: right;
    background-color: #007bff;
    color: #fff;
    column-gap: .5rem;
    font-weight: 500;
    padding: .25rem 1rem;
    border-radius: .25rem;
    position: relative;
    z-index: 1;
   
}
        
.button-2::after {
    position: absolute;
    content: '';
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #517fa4;
    transform-origin: center;
    z-index: -1;
    transform: scale(0);
    border-radius: .25rem;
    transition: .4s;
    color: #Fff;
}
        
.button-2:hover::after {
    transform: scale(1);
    color: #Fff;
}

#contador {
    font-size: 1rem;
}


 @media screen and (max-width: 1000px) {
    .card {
        width: 500px;
        height: 40%;
    }
    .messagem-green {
        margin-bottom: 0.25rem;
    }
    .botaos .botao {
       width: 100%;
       gap:6.4rem;
    }
}

@media screen and (max-width: 992px) {
    .card {
        width: auto;
        height: auto;
    }
    .clear {
        margin-top: 0.75rem;
    }
    /* .botaos .botao {
        width: 80%;
        left: 10%;
    } */
}

</style>

<body>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
    <div class="card-content" id="card-content">
        <div class="card" id="card">
            <h4 class="card-header"> Alterar dados da Conta </h4>
            <div class="card-body">   
                <?php
                    $txtCod_usuario = $_POST["txtCod_usuario"];
                    include_once 'usuario.php';
                    $u = new Usuario();
                    $u->setCod_Usuario($txtCod_usuario); 
                    $pro_bd = $u->alterar();
                ?>
                <form id="login-form" name="cliente" method="POST" action="">
                    <?php
                    foreach($pro_bd as $pro_mostrar)
                    {
                    ?>
                    <div class="row">
                            <div>
                                <input type="hidden" name="txtCod_usuario" class="white"  size="5" value='<?php echo $pro_mostrar[0]?>'>
                            </div>
                        </div> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Usuário </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="txtusuario" placeholder="Digite uma novo nome de usuário!" required>
                                </div>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Senha </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="password" name="txtsenha" maxlength="3" class="form-control" placeholder="Digite uma nova senha!" required onkeypress="return blokletras(window.event.keyCode)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="redirect" value="">
                            <input id="button-type" type="submit" class="btn btn-primary btn-lg btn-block" value="Alterar dados da conta" name="btnalterar">              
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="clear">
                        <a href="login.php" class="button-2"><i class="uil uil-navigator button__icon "></i> Voltar </a>
                    </div>
                </form>
                        <?php
                        extract($_POST,  EXTR_OVERWRITE);
                        if (isset($btnalterar)) {  

                            include_once 'usuario.php';
                            $uro = new Usuario();
                            $uro->setUsu($_POST["txtusuario"]);
                            $uro->setSenha($_POST["txtsenha"]);
                            $uro->setCod_Usuario($txtCod_usuario); 
                            echo "<h3 class='messagem'>" . $uro->alterar2() . "</h3>";
                            echo "<p>Redirecionando em <span id='contador'>3</span> segundos...</p>";
                            if ($uro->alterar2()) {
                                echo "<script>Contagem()</script>";
                        }
                    } 
                ?>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
<script>
function Contagem() {
    var contadorElement = document.getElementById('contador');
    var segundosRestantes = parseInt(contadorElement.textContent);

    if (segundosRestantes > 0) {
        segundosRestantes--;
        contadorElement.textContent = segundosRestantes;
        setTimeout(Contagem, 1000);
    } else {
        window.location.href='login.php';
    }
}

window.onload = function() {
    Contagem();
};
</script>
</html>
<div id="particles-js"></div>