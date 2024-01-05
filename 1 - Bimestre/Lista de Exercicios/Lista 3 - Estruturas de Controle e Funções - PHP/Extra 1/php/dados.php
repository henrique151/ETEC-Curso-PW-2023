<html>
<head>
<title> Dados Dos Cliente </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="central-container">
<div class="forms">
<div class="form">
<?php 
$Vusuario = $_POST['txtusuario'];
$Vsenha= $_POST['txtsenha'];

 echo "O seu nome de usuário foi salvo. Confira a seguir:". $Vusuario . "<br>";
 echo "A sua senha é ". $Vsenha. "<br>";
?>
</div>
</div>
</div>


