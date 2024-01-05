<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Alterar do Autoria</title>
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

.consultar {
    margin-top: 20px;
    text-align: center;
    font-size: 1rem;
    font-weight: 600;
    color: #fff;
    display: flex;
   
}

.consultar p {
    margin-left: 8px;
    margin-right: 10px; 
    color: #73b3f0;
    font-size: 1rem;
    font-weight: 600;
}

.white {
    color: #fff;
    font-weight: 500;
}


.form .inputbox .messagem {
    margin-top: 1rem;
    color: #6bfc03;
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
                    <h2>Tela de Alterar Do Autoria</h2>
                        <div class="inputbox">
                        <a href="../../paginas/autoria.html" class="button"> Voltar <span class="icon-arrow">&#8592;</span></a>        
                        <?php
                          $txtCod_Autoria = $_POST["txtCod_Autoria"];
                          include_once 'autoria.php';
                          $p = new Autoria();
                          $p->setCod_Autoria($txtCod_Autoria);
                          $pro_bd = $p->alterar(); // Chamado de método com retorno - o $p é parametro enviado
                           ?>
                        <form name="cliente2" method = "POST" action = "">
                        <?php
                            foreach($pro_bd as $pro_mostrar)
                            {
                            ?> 
                             <div class="inputbox">
                                <input type="hidden" name="txtCod_Autoria" class="white"  size="5" value='<?php echo $pro_mostrar[0]?>'>
                             <?php echo "<h3 class='white'>Cod_Autoria: " .  $pro_mostrar[0] ."</h3>"; ?>  
                            </div> 
                            <div class="inputbox">
                                <input type="hidden" name="txtCod_Autor" class="white"  size="5" value='<?php echo $pro_mostrar[1]?>'>
                             <?php echo "<h3 class='white'>Cod_Autor: " .  $pro_mostrar[1] ."</h3>"; ?>  
                            </div> 
                            <div class="inputbox">
                                <input type="hidden" name="txtCod_Livro" class="white"  size="5" value='<?php echo $pro_mostrar[2]?>'>
                             <?php echo "<h3 class='white'>Cod_Livro: " .  $pro_mostrar[2] ."</h3>"; ?>  
                            </div> 
                            <div class="inputbox">
                             <?php echo "<h3 class='white'>Data de Lancamento: "; ?> 
                               <input name="txtDataLancamento" type="text" size="40" value='<?php echo $pro_mostrar[3]?>'>
                            </div>
                            <div class="inputbox">
                             <?php echo "<h3 class='white'>Editora: "; ?> 
                               <input name="txtEditora" type="text" size="40" value='<?php echo $pro_mostrar[4]?>'>
                            </div>
                            <div class="inputbox">
                                <br><br>  
                                <input name="btnalterar" type="submit" value="Alterar">         
                            </div>
                           
                            <?php
                            }
                            ?>
                           <?php
                            extract($_POST, EXTR_OVERWRITE);
                            if (isset($btnalterar)) {
                                include_once 'autoria.php';
                                $pro = new Autoria();
                                $pro->setCod_Autoria($txtCod_Autoria);
                                $pro->setCod_Autor($_POST["txtCod_Autor"]);
                                $pro->setCod_Livro($_POST["txtCod_Livro"]);
                                $pro->setDataLancamento($_POST["txtDataLancamento"]);
                                $pro->setEditora($_POST["txtEditora"]);   
                                 echo "<h3 class='messagem'>" . $pro->alterar2() . "</h3>"; 
                                 echo "<p>Redirecionando em <span id='contador'>5</span> segundos...</p>";
                                 if ($pro->alterar2()) {
                                     echo "<script>Contagem()</script>";
                             }
                         }
                         ?>
                     </div>
                 </form>
             </div>
         </div>
     </div>
</section>
</body>
<script>
function Contagem() {
 var contadorElement = document.getElementById('contador');
 var segundosRestantes = parseInt(contadorElement.textContent);

 if (segundosRestantes > 0) {
     segundosRestantes--;
     contadorElement.textContent = segundosRestantes;
     setTimeout(Contagem, 1000); // Chama a função novamente após 1 segundo (1000 milissegundos)
 } else {
     window.location.href='Pri_alterarAutoria.php';
 }
}

window.onload = function() {
 Contagem();
};
</script>

</html>
