<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela De Excluir do Livro</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
* {
    padding: 0;
    margin: 0;
    border: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    text-decoration: none;
}

body {
    overflow: hidden;
}

section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(45deg,  #466c8c,  #153a59);
}
p {
    color: #fff;
    font-size: 1.2rem;

}
section .color {
    position: absolute;
    filter: blur(150px);
}

section .color:nth-child(1) {
    bottom: -350px;
    width: 1200px;
    height: 1200px;
    background: #13548a;
}

section .color:nth-child(2) {
    bottom: -150px;
    left: 100px;
    width: 500px;
    height: 500px;
    background:  #466c8c;
}

section .color:nth-child(3) {
    bottom: 50px;
    right: 100px;
    width: 300;
    height: 300;
    background:  #466c8c;
}

.box {
    position: relative;
}

.box .square {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.5);
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 10px;
    animation: animate 10s linear infinite;
    animation-delay: calc(-1s * var(--i));
}

@keyframes animate {
    0%,
    100% {
        transform: translateY(-40px);
    }
    50% {
        transform: translateY(40px);
    }
}

.box .square:nth-child(1) {
    top: -50px;
    right: -60px;
    width: 100px;
    height: 100px;
}

.box .square:nth-child(2) {
    top: 150px;
    left: -100px;
    width: 120px;
    height: 120px;
    z-index: 2;
}

.box .square:nth-child(3) {
    bottom: 50px;
    right: -60px;
    width: 80px;
    height: 80px;
    z-index: 2;
}

.box .square:nth-child(4) {
    bottom: -80px;
    left: 100px;
    width: 50px;
    height: 50px;
}

.box .square:nth-child(5) {
    top: -80px;
    left: 140px;
    width: 60px;
    height: 60px;
}

.container {
    position: relative;
    width: 600px;
    min-height: 600px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.5);
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
}

.form {
    position: relative;
    width: 100%;
    height: 100%;
    padding: 40px;
}

.form h2 {
    position: relative;
    color: #fff;
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 40px;
}

.form h2::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 80px;
    height: 4px;
    background: #fff;
}

.form .inputbox {
    width: 100%;
    margin-top: 20px;

}

.form .inputbox p {
    margin-bottom: .75rem;

}

.form .inputbox input {
    width: 100%;
    background: rgba(255, 255, 255, 0.2);
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    letter-spacing: 1px;
    color: #fff;
    box-shadow: 0 5px 15px rgba(255, 255, 255, 0.5);
}

.form .inputbox input::placeholder {
    color: #fff;
}

.form .inputbox input[type="submit"] {
    background: #fff;
    color: #666;
    max-width: 100%;
    cursor: pointer;
    margin-bottom: 20px;
    font-weight: 600;
}


.form .inputbox input[type="reset"] {
    background: #fff;
    color: #666;
    max-width: 100%;
    cursor: pointer;
    margin-bottom: 20px;
    font-weight: 600;
}

.button {
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    background: #fff;
    color: #666;
    column-gap: .5rem;
    font-weight: 500;
    padding: 3px;
    border-radius: .25rem;
    position: relative;
    z-index: 1;
}

.form .inputbox .messagem {
    margin-top: 1rem;
    color: #6bfc03;
}

.error-message {
    color: red;
}


</style>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>
            <div class="container">
                <div class="form">
                    <h2>Tela de Excluir do Livro</h2>
                    <form name="cliente" method = "POST" action = "">
                        <div class="inputbox">
                            <p> Código do Livro: </p><input name="txtCod_Livro" type="text" size="40" placeholder="Digite o Código do Livro" required onkeypress="return blokletras(window.event.keyCode)"></p>               
                        </div>
                        <div class="inputbox">
                            <input name="btnenviar" type="submit" value="Excluir">
                        </div>
                        <div class="inputbox">
                            <input name="limpar" type="reset" value="Limpar">
                        </div>
                        <div class="inputbox">
                        <a href="../../paginas/livro.html" class="button"> Voltar <span class="icon-arrow">&#8592;</span></a>                      
                        <?php
                            extract($_POST, EXTR_OVERWRITE);
                            if(isset($btnenviar))
                            {
                                include_once 'livro.php';
                                $p = new Livro();
                                $p->setCod_Livro($txtCod_Livro);
                                $mensagem = $p->exclusao(); 
                                echo "<h3 class='messagem'>" .  $mensagem ."</h3>";   
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<script>
    function blokletras(keypress) {

if (keypress >= 48 && keypress <= 57) {
    return true;
} else {
    return false
}
}
</script>

</body>

</html>

