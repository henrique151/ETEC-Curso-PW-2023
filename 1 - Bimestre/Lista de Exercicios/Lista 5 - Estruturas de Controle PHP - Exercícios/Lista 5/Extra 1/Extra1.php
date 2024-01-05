<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $X1 = $_POST['x'];
    $Y2 = $_POST['y'];
    $pot = 1;

    for($z = 0; $z <= $Y2; $z++) {
        $pot *= $X1; 
        # *= Multiplica o valor de uma variável ou propriedade pelo valor de uma expressão e atribui o resultado à variável ou à propriedade.
        # A operação $pot = $pot * $x está multiplicando o valor atual da variável $pot pelo valor de $x, e em seguida atribuindo o resultado de volta à variável $pot
    }

    echo 'A potência de ' . $X1 . ' elevado '.$Y2.' é igual a '. $pot;


 
    ?>
</body>

</html>