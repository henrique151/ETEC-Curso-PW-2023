<html>

<head>
    <title> Página Exercicios </title>
</head>
<body>
    <?php

    $num1 = $_POST['num1'];
    switch ($num1) {
      case 1:
        echo 'O cargo que foi escolhido foi Secretária';
        break;
      case 2:
        echo 'O cargo que foi escolhido foi Gerente';
        break;
      case 3;
        echo 'O cargo que foi escolhido foi Operário';
        break;
      case 4;
        echo 'O cargo que foi escolhido foi Analista';
        break;
      case 5;
        echo 'O cargo que foi escolhido foi Faxineiro';
        break;
    default: 
    echo 'O número que foi digitado é inválido';
        }

    

 
    ?>
</body>

</html>