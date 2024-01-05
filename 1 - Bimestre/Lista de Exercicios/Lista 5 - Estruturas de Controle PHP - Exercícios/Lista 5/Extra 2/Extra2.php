<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $alt = $_POST['altura'];
    $lar= $_POST['largura'];
    $profu = $_POST['profundo'];
    
    $volume = $alt * $lar * $profu;

    echo "O volume da caixa d'água é de $volume cm³\n";


 
    ?>
</body>

</html>