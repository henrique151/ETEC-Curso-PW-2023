<html>
<head>
<title> Página calcularquadrado.php </title>
</head>
<body>
<?php 
    $A = $_POST['txta'];
    $B = $_POST['txtb'];
    $soma = $A + $B;
    $quadr = pow($soma,2);
    echo "A soma dos valores é ".$soma .'<br>';
    echo "O quadrado da soma é ".$quadr;
?>