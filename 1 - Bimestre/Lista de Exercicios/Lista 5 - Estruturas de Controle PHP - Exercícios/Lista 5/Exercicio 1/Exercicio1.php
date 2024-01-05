<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $num = $_POST['num1'];
    
    if($num >= 100) {
        echo 'Compra maior ou igual a cem';
    } else {
        echo 'Compra menor que cem';
    }
 
    ?>
</body>

</html>