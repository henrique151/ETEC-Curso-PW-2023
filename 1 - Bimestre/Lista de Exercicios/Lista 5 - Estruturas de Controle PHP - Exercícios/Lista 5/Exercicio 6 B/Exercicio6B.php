<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $nome = $_POST['num1'];
    $peso = $_POST['num2'];
    $genero = $_POST['genero'];
    $altura = $_POST['num3'];

  if($genero == "Masculino") {
    $PI = $altura * 2 * 23;
    if($peso > $PI) {
      echo '<font color="red">'. $nome ." Seu peso ideal é ". $PI . ' Kg. Você está acima do peso ideal.' . '</font>';
    } else if ($peso < $PI) {
      echo '<font color="#fcba03">'. $nome ." Seu peso ideal é ". $PI . ' Kg. Você está baixo do peso ideal.' . '</font>';
    } else {
      echo '<font color="blue">'. $nome ." Seu peso ideal é ". $PI . ' Kg. Você está dentro do peso ideal.' . '</font>';
    }
  } else if ($genero == "Feminino") {
    $PI = $altura * 2 * 22;
    if($peso > $PI) {
      echo '<font color="red">'. $nome ." Seu peso ideal é ". $PI . ' Kg. Você está acima do peso ideal.' . '</font>';
    } else if ($peso < $PI) {
      echo '<font color="#fcba03">'. $nome ." Seu peso ideal é ". $PI . ' Kg. Você está baixo do peso ideal.' . '</font>';
    } else {
      echo '<font color="blue">'. $nome ." Seu peso ideal é ". $PI . ' Kg. Você está dentro do peso ideal.' . '</font>';
    }
  }
    ?>
</body>

</html>