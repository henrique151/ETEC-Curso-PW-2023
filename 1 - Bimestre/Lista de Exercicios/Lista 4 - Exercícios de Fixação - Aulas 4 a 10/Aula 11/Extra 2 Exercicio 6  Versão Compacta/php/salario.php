<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 6</h1>
    <?php
      $nt1 = $_POST['num1'];
      echo 'O salário bruto é ' . $nt1 . '.<br> <br>';
      $gratifica =  $nt1 * 0.1;
      $imposto = $nt1 * 0.2;
      $final = $nt1 +  $gratifica - $imposto;
      echo 'O Salário líquido é ' .  $final;
    ?>
    </div>
</body>

</html>