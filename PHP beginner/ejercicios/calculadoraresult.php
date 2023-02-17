<?php
    $num1 = 0;
    $num2 = 0;
    if (isset( $_GET['numero1']) && isset( $_GET['numero1']) ){
        
    $num1 = $_GET['numero1'];
    $num2 = $_GET['numero2'];
    echo "suma de $num1 mas $num2 = ".($num1+$num2);
    echo '<br>';
    echo "resta de $num1 - $num2 = ".($num1-$num2);
    echo '<br>';
    echo "multiplicacion de $num1 x $num2 = ".($num1*$num2);
    echo '<br>';
    echo "division de $num1 / $num2 = ".($num1/$num2);
    echo '<br>';
    }else{
        echo "error por favor agrega 2 numeros";    
        echo '<br>';
        echo '<br>';
        echo "<a href='./calculadora.php'>Volver a la calculadora</a>";
    }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <br>

</body>
</html>