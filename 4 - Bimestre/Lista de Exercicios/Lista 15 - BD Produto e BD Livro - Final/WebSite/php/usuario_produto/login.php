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
</head>

<style>

.block-input {
    display: block;
    
}

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
    gap:2.7rem;
 
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
    border: 2px solid transparent;
    text-decoration: none;
    width: 200px;
    text-align: center;
}

.link-container.blue-bg {
    background-color: #007bff;
    border-radius: 5rem;
    margin-top: 0.5rem;
    transition: all ease 250ms;
}

.link-container.orange-bg {
    margin-top: 0.5rem;
    background-color:#007bff;
    border-radius: 5rem;
    transition: all ease-in 300ms;
}

.link-container.red-bg {
    margin-top: 0.5rem;
    background-color:#007bff;
    border-radius: 5rem;
    transition: all ease-in-out 350ms;
}

.link-container.blue-bg:hover {
    background-color: #517fa4;
    transition: all ease 250ms;
}

.link-container.orange-bg:hover {
    background-color: #517fa4;
    transition: all ease-in 300ms;
}

.link-container.red-bg:hover {
    background-color: #517fa4;
    transition: all ease-in-out 350ms;
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
    margin-left: 140px;
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

.messagem {
    color: #6bfc03;
    font-size: 1.2rem;
}

.messagem-cancelar {
    color: #d9534f;
    font-size: 1rem;
}

.messagem-informacao {
    color: #F4A460;
    font-size: 1.2rem;
}

#mensagem-exclusao {
    background-color: #Fff;
    border: none;
    color:#6bfc03 ;
    font-size: 1.2rem;
}


#contador {
    font-size: 1rem;
}

.red {
    background-color: red;
    border:  red;
}

.green {
    background-color: green;
    border: green;
}

 @media screen and (max-width: 999px) {
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



@media screen and (max-width: 999px) {
    .card {
        width: auto;
        height: auto;
    }
    .clear {
        margin-top: 0.75rem;
    }
    .button-2 {
        margin-left: 260px;
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
            <h4 class="card-header"> Tela De Login </h4>
            <div class="card-body">
            <?php
                extract($_POST, EXTR_OVERWRITE);
                if (isset($btnexculir)) {
                    include_once 'usuario.php';
                    $u = new Usuario();
                    $u->setCod_Usuario($txtCod_usuario);
                    $confirmacao = true; // Defina a confirmação como verdadeira para este exemplo

                    if ($confirmacao) {
                        // Exibir uma mensagem de confirmação
                        echo "<h5 class='messagem-informacao'>Tem certeza de que deseja excluir esta conta?</h5>";

                        // Adicione um botão de confirmação
                        echo "<form method='POST' action=''>
                                <input type='hidden' name='txtCod_usuario' value='$txtCod_usuario'>
                                <input type='submit' name='btnconfirmar' value='Confirmar' class='btn btn-primary green'>
                                <input type='submit' name='btncancelar' value='Cancelar' class='btn btn-primary m-2 red'>
                            </form>";

                    } else {
                        echo "Ok"; 
                    }
                }    
                if (isset($btnconfirmar)) {
                    include_once 'usuario.php';
                    $u = new Usuario();
                    $u->setCod_Usuario($txtCod_usuario);
                    echo "<h5 class='messagem'>" . $u->exclusao() . "</h5>";
                    echo "<div id='mensagem-exclusao' style='display:none;'></div>";
                    echo "<script>mostrarMensagemExclusao('Excluído com sucesso!', true);</script>";
                }
                // E um bloco para lidar com o cancelamento
                if (isset($btncancelar)) {
                    include_once 'usuario.php';
                    $u = new Usuario();
                    $u->setCod_Usuario($txtCod_usuario);
                    echo "<h5 class='messagem-cancelar'>" . $u->exclusaoerro() . "</h5>";
                    echo "<div id='mensagem-exclusao' style='display:none;'></div>";
                    echo "<script>mostrarMensagemCancelamento('Operação de exclusão cancelada.', true);</script>";
                }
                ?>
                <form id="login-form" name="cliente" method="POST" action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Usuário </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="txtusuario" placeholder="Usuário" required>
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
                                    <input type="password" name="txtsenha" maxlength="3" class="form-control" placeholder="Senha" required onkeypress="return blokletras(window.event.keyCode)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="redirect" value="">
                            <input id="button-type" type="submit" class="btn btn-primary btn-lg btn-block" value="Login" name="btnsubmit">
                        </div>
                    </div>
                    <div class="clear">
                        <i class="fa fa-user fa-fw"></i> Criar um novo login? <a href="cadastrologin.php"> Clique Aqui!</a> 
                        <a href="../../index.html" class="button-2"><i class="uil uil-navigator button__icon "></i> Voltar </a>
                    </div>

                </form>
                <?php
                    extract($_POST, EXTR_OVERWRITE);
                    if(isset($btnsubmit)) {
                        include_once 'usuario.php';
                        $u = new Usuario();
                        $u->setUsu($txtusuario);
                        $u->setSenha($txtsenha);
                        $pro_bd = $u->logar();

                        $existe = false;
                        foreach($pro_bd as $pro_mostrar) {
                            $existe = true;
                            ?>
                            <br><b><?php echo "<div class='messagem-green'>Bem Vindo! Usuário:  " . $pro_mostrar[1] . "</div>" ?></b>
                            <div class='botaos'>
                                <div class="botao">
                                    <div class="link-container blue-bg">
                                    <form method="POST" action="../../paginas/menuPR.html">
                                        <button class="btn btn-primary" type="submit" style="color: #fff;">Entrar no Banco</button>
                                    </form>
                                    </div>
                                    <div class="link-container orange-bg">
                                    <form method="POST" action="alterarlogin.php">
                                        <input class="block-input" type="hidden" name="txtCod_usuario" value="<?php echo $pro_mostrar[0]; ?>">
                                        <button class="btn btn-primary" type="submit" style="color: #fff;">Alterar seus Dados</button>
                                    </form>
                                    </div> 
                                    <div class="link-container red-bg">
                                    <form method="POST" action="login.php">
                                        <input class="block-input" type="hidden" name="txtCod_usuario" value="<?php echo $pro_mostrar[0]; ?>">
                                        <button name="btnexculir" class="btn btn-primary" type="submit" style="color: #fff;">Deletar Conta</button>
                                    </form>
                              
                                </div>
                                </div>
                            </div>
                            <?php
                        }
                        if($existe == false) {
                            echo "<br>" . "<span class='help-block with-errors text-danger erro-red'>Login Inválido! Tente Novamente.</span>";
                        }
                    }
                    ?>
            </div>
        </div>
    </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const card = document.getElementById("card");
    const cardContent = document.getElementById("card-content"); // Div que contém o conteúdo
    const loginButton = document.querySelector(".login-button");
    const loginForm = document.getElementById("login-form");

    loginButton.addEventListener("click", function () {
        // Simule uma verificação de usuário e senha
        const username = loginForm.txtusuario.value;
        const password = loginForm.txtsenha.value;

        if ((username === "a" && password === "123")) {
            card.style.width = "800px";
            card.style.height = "60%";
            card.style.transition = "all ease 250ms";
        } else {
            card.style.width = "550px";
            card.style.height = "47%";
            card.style.transition = "all ease-in 300ms";          
        }

        // Restaurar o conteúdo após a alteração de tamanho
        // cardContent.innerHTML = username === "a" && password === "123" ? "Bem-vindo! Você está logado corretamente." : "Usuário ou senha incorretos. Tente novamente.";
    });
});

function blokletras(keypress) {

if (keypress >= 48 && keypress <= 57) {
    return true;
} else {
    return false
}

}

function contagem() {
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

</script>
</body>

</html>
<div id="particles-js"></div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->