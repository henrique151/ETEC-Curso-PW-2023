<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $calu = $_POST['num3'];
    switch ($calu) {
      case 1:
        $res = $num1 + $num2;
        echo 'A escolha que foi escolido foi Soma. E o resultado deu ' .$res;
        break;
      case 2:
        $res = $num1 - $num2;
        echo 'A escolha que foi escolido foi Subtração. E o resultado deu ' .$res;
        break;
      case 3;
        $res = $num1 / $num2;
        echo 'A escolha que foi escolido foi Divisão. E o resultado deu ' .$res;
      break;
        case 4;
        $res = $num1 * $num2;
      echo 'A escolha que foi escolido foi Multiplicação . E o resultado deu ' .$res;
      break;
    default: 
    echo 'O número que foi digitado é inválido';
        }

    

 
    ?>
</body>

</html>