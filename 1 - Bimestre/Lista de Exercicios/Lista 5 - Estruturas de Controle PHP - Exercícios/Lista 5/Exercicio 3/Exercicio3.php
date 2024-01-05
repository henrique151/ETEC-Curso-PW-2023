<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $num = $_POST['num1'];
    
    if($num % 2 == 0) {
        echo '<font color="#5df542">'. "O seu número é Par.". '</font>';
    } else {
        echo '<font color="blue">'. "O seu número é Ímpar". '</font>';
    }
 
    ?>
</body>

</html>