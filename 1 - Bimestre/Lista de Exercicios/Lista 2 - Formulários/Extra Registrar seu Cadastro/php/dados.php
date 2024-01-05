<html>
<head>
<title> Dados Dos Cliente </title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="central-container">
<div class="forms">
<div class="form">
<?php 
 $Vnome = $_POST['nomecli'];
 $Vemail = $_POST['emailcli'];
 $Vcpf = $_POST['CPFcli'];
 $Vrg = $_POST['RGcli'];
 $Vtelefone = $_POST['telefonecli'];
 $Vsenhas = $_POST['senhacli'];
 $Vbancos = $_POST['baconsdocli'];

 echo "Olá seu dados foram armazenados no bancos de dados. Para confira olhe a baixo: <br> Nome:" . $Vnome . "<br>";
 echo "Email : ". $Vemail . "<br>";;
 echo "CPG : ". $Vcpf . "<br>";;
 echo "RG: ". $Vrg . "<br>";;
 echo "Telefone: ". $Vtelefone . "<br>";;
 echo "Senha: ". $Vsenhas . "<br>";;
 echo "Banco: ". $Vbancos . "<br>";;
?>
</div>
</div>
</div>


