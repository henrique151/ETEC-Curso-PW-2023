<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 12</h1>
    <?php
      $Inicial = $_POST['num1'];
      $final = $_POST['num2'];
      
      for($Inicial = $final; $Inicial >=1; $Inicial--){
        if ($Inicial % 2!= 0 ){
            echo $Inicial .'<br />';
        } 
        }  
    ?>
    </div>
</body>

</html>