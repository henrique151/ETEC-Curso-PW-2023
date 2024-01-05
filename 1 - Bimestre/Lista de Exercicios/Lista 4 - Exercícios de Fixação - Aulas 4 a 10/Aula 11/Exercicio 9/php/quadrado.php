<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Tabuada A</title>
</head>
<body>
<div class="container font">
<h1>Exercicio 9</h1>
    <?php
      $inical = $_POST['num1'];
      $final = $_POST['num2'];
      $impar = 0;
   
 
      for($z = $inical; $z <= $final; $z++)  {
         if ($z % 2!= 0 ){
             $impar =  $impar + $z;
        } 
      }
      echo 'A soma dos número ímpares é ' . $impar;
      
        
   
    ?>
    </div>
</body>

</html>