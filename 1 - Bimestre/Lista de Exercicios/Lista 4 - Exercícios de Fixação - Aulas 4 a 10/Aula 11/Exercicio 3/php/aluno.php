<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 3</h1>
    <?php
      $name = $_POST['nome'];
      $nt1 = $_POST['num1'];
      $nt2 = $_POST['num2'];
      $nt3 = $_POST['num3'];
      $nt4 = $_POST['num4'];
      $ntfi =  ($nt1 + $nt2 + $nt3 + $nt4 ) / 4;

      if($ntfi >= 5)  {
        echo 'Olá aluna (o) ' . $name . '</br>' . 'Você foi aprovado com uma média de: ' . $ntfi;
      } else {
        echo 'Olá aluna (o) ' . $name . '</br>' . 'Você foi reprovado com uma média de: ' . $ntfi;
      }
    ?>
    </div>
</body>

</html>