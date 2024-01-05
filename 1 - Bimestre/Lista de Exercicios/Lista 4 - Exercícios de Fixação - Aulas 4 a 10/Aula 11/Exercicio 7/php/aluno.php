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
      $MA =  ($nt1 + $nt2 + $nt3 + $nt4 ) / 4;

      if($MA >= 6)  {
        echo 'Olá aluna (o) ' . $name . '</br>' . 'Você foi Aprovado com uma média de: ' . $MA;
      } else if ($MA < 3){
        echo 'Olá aluna (o) ' . $name . '</br>' . 'Você foi Retido com uma média de: ' . $MA;
      } else if ($MA >= 3 && $MA < 6) {
        echo 'Olá aluna (o) ' . $name . '</br>' . 'Você foi enviado por Exame com uma média de: ' . $MA;
      }
    ?>
    </div>
</body>

</html>