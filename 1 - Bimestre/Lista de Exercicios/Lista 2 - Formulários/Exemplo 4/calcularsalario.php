<html>
<head>
<title> Página calcularsalario.php </title>
</head>
<body>
<?php 
    $valor = $_POST['txtvalor'];
    $horas = $_POST['txthoras'];
    $salario= $valor * $horas;
    echo "De acordo com as informações digitadas na página anterior, o salário é R$".$salario
     
?>