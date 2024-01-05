<html>
    <head>
        <title>Acao - Recebimento dos dados de um Formulário</title>
    </head>
<body>
    <?php
    $Vnome = $_POST['nome']; // Atribuindo o conteúdo da caixa de texto "nome" a variavel "$Vnome"
    $Vidade= $_POST['idade']; // Atribuindo o conteúdo da caixa de texto "idade" a variavel "$Vidade"

    echo "Oi !! " . $Vnome . "." . "<br>" . "Você tem " . $Vidade . " anos !!";
    // Mostrando na tela strings concatendas com variáveis e com comandos HTML 
    
    ?>
</body>

</html>