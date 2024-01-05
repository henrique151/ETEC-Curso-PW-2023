<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $nome = $_POST['num1'];
    $senha = $_POST['num2'];

    if($nome == "ETE" && $senha == "ETE") {
        echo '<font color="green">'. "Bem Vindo ao Sistema". '</font>';
    } else {
        echo '<font color="red">'. "Usuário ou senha inválidos!!, tente novamente!!!". '</font>';
    }
 
    ?>
</body>

</html>