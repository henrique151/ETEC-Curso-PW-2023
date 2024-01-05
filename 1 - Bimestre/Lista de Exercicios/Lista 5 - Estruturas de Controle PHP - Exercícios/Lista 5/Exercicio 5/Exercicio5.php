<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $res = ($num1 + $num2) / 2;

    if($res >= 8) {
        echo '<font color="green">'. "O aluno foi Aprovado com uma medía: ". $res . '</font>';
    } else if ($res > 3 && $res < 8) {
        echo '<font color="#fcba03">'. "O aluno está de Recuperação com uma medía: ". $res . '</font>';
    } else if ($res <= 3) {
        echo '<font color="red">'. "O aluno está de Reprovado com uma medía: ". $res . '</font>';
    }

 
    ?>
</body>

</html>