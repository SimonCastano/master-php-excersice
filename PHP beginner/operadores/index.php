<?php

//operadores basicos
$number1 = 65;
$number2 = 22;
echo "suma $number1 + $number2 es igual a ".($number1+$number2)."<br/>";
echo "Resta $number1 - $number2 es igual a ".($number1-$number2)."<br/>";
echo "Multiplicacion $number1 x $number2 es igual a ".($number1*$number2)."<br/>";
echo "Division $number1 / $number2 es igual a ".($number1/$number2)."<br/>";
echo "Modulo $number1 % $number2 es igual a ".($number1%$number2)."<br/>";

//opperadores de incremento y decremento
$year = 2022;

//decremento
--$year;
1-$year;
$year-1;
$year--;

//incremento
++$year;
1+$year;
$year+1;
$year++;
echo '<h1>'.$year.'<h1/>';

//operadores de asignacion
$edad = 21;

echo ($edad+= 5);