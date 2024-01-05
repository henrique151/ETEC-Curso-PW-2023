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
      $aumento = 0.1; # 10 / 100;
      $ntli = $nt1 * $aumento; 
      $ntli1 = $ntli + $nt1;  
      echo 'O salário líquido atual com a gratificação sem os imposto é ' . $ntli1 . '.<br> <br>';
      $impos = 0.2; # 20 /100;  
      $ntlifi1 = $impos * $nt1;
      $ntlifi2 = $ntli1 - $ntlifi1;
      echo 'O salário líquido com a gratificação com os imposto é ' . $ntlifi2 . '.<br> <br>';

    ?>
    </div>
</body>

</html>