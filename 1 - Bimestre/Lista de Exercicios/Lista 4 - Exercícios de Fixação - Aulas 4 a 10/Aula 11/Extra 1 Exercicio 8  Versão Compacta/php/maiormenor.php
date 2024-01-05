<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 8</h1>
<?php
$nu1 = $_POST['numero1'];
$nu2 = $_POST['numero2'];
$nu3 = $_POST['numero3'];

$maior = $nu1;
$menor = $nu1;

if($nu2 > $maior){
    $maior = $nu2;
}
if($nu3 > $maior){
    $maior = $nu3;
}

if($nu2 < $menor){
    $menor = $nu2;
}
if($nu3 < $menor){
    $menor = $nu3;
}

echo "Maior número: " . $maior . "<br>";
echo "Menor número: " . $menor . "<br>";
?>

    </div>
</body>

</html>