<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $num = $_POST['num1'];
    
    if($num >= 0) {
        echo '<font color="blue">'. "Número Positivo". '</font>';
    } else {
        echo '<font color="red">'. "Número Negativo". '</font>';
    }
 
    ?>
</body>

</html>