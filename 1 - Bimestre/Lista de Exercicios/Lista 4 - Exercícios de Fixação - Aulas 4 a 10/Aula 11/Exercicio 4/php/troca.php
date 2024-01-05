<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 4</h1>
    <?php
      $nt1 = $_POST['num1'];
      $nt2 = $_POST['num2'];
      $ctr = 0;
      $ctr = $nt1;
      $nt1 = $nt2;
      $nt2 = $ctr;
      echo 'Na primeira variável que foi armazenada foi: ' . $nt1 . '<br>';
      echo 'Na segunda variável que foi armazenada foi: '. $nt2;
    ?>
    </div>
</body>

</html>