<?php
// Programa que escribe numero de uno a 500 y se repite hasta que aparece un multiplo de 7 , pero como mucho se repite 8 veces 
//Variable Centinela y la variable contador 

$salir = false;
$i = 1;

while ($salir == false && $i <=8 ){
$num = rand(1,500);
echo ($num. "<br>");
$i++;
$salir = ($num % 7 == 0);

}


?>