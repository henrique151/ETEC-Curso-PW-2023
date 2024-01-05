<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 5</h1>
    <?php
      $nt1 = $_POST['num1'];
      $nt2 = $_POST['num2'];
      $nt3 = $_POST['num3'];
      $total = ($nt1 * $nt1 ) + ($nt2 * $nt2 ) + ($nt3 * $nt3 );

      echo 'A soma dos números quadrados é: ' . $total;

   
    ?>
    </div>
</body>

</html>