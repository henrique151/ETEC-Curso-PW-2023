<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 8</h1>
    <?php
      $a = $_POST['num1'];
      $b = $_POST['num2'];
      $c = $_POST['num3'];
      
     if($a > $b && $a > $c &&  $b > $c) {
      echo 'O maior número é ' .$a . '. O menor é ' .$c ;
     } else if($a > $b && $a > $c &&  $b < $c) {
        echo 'O maior número é ' .$a . '. O menor é ' .$b ;
     } else if ($b > $a && $b > $c && $a > $c) {
        echo 'O maior número é ' .$b . '. O menor é ' .$c ;
     } else if ($b > $a && $b > $c && $a < $c) {
        echo 'O maior número é ' .$b . '. O menor é ' .$a ;
     } else if ($c > $a && $c > $b && $b > $a) {
        echo 'O maior número é ' .$c . '. O menor é ' .$a ;
     } else if ($c > $a && $c > $b && $b < $a) {
        echo 'O maior número é ' .$c . '. O menor é ' .$b ;
     }

     

   
    ?>
    </div>
</body>

</html>