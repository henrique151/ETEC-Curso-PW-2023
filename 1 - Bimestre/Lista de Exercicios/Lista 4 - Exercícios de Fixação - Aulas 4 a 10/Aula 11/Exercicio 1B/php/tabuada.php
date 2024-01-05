<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada B</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 1</h1>
    <?php
      $multi = $_POST['num1'];
      $z = 0;
      for($z = 0; $z <= 10;  $z++) {
        $tab = $multi * $z;
        echo  'A multiplicação é: ' .$multi . ' * '. $z . ' = ' . $tab . ' <br/>';
    }
    ?>
    </div>
</body>

</html>