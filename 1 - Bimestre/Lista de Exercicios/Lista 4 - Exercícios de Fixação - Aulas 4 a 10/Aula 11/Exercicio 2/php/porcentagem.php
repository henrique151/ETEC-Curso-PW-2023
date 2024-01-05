<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 2</h1>
    <?php
      $preco = $_POST['num1'];
      $cem = $_POST['numb2'];
      $desco = $cem / 100;
      $prefi = $preco * $desco;
      $finalp = $preco - $prefi;
        echo  'O valor com desconto é R$' . $prefi . '<br><br>';
        echo  'O valor do produto com desconto é R$' . $finalp;
    ?>
    </div>
</body>

</html>