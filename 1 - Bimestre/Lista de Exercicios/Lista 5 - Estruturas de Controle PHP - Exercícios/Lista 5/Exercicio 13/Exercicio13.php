<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php
    $num = 0;

    for($z = 0; $z <= 20; $z++) {
       if($z % 4 == 0) {
        echo '<br>'. 'Os números que é divisivel são '. $z .' por 4. ';
       }
    }
      
    ?>
</body>

</html>