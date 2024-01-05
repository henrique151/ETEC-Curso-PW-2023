<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 11</h1>
    <?php
    $nu1 = $_POST['num1'];
    $nu2 = $_POST['num2'];
    $caluc = $_POST['calucular'];

    if($caluc == "+"){
        $total = $nu1 + $nu2;
        echo 'O resutado é ' . $total;
    } 
     else if ($caluc == "-") {
        $total = $nu1 - $nu2;
        echo 'O resutado é ' . $total;
    } else if ($caluc == "/") 
    {
        $total = $nu1 / $nu2;
        echo 'O resutado é ' . $total;

    } else if ($caluc == "*" ) {
        $total = $nu1 * $nu2;
        echo 'O resutado é ' . $total;
    } 

    ?>
    </div>
</body>

</html>