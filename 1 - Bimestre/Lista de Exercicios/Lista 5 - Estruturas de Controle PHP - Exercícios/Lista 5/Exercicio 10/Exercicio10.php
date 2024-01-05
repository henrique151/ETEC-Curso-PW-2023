<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php
    $num = 0;
    for($z = 1; $z <= 10; $z++) {
       if($z % 2 == 0) {
         echo 'Número par '. $z . '<br>';
         $num += $z;
       }
      
    }
    echo '<br>'.'A soma é '. $num;

    
 
    ?>
</body>

</html>