<!-- Ejercicio de Bucle Centinela . Hay una variable que me dice si nos salimos del bucle  al cumplirse una condición-->
<!--  Programa que escribe numeros en aleatorio entre uno y quinientos y se pare cuendo el numero sea multiple 7  -->
<?php
$salir = false;

while (!$salir){
    $num = rand(1,500);
    echo $num . "<br>";
  //  $salir = ($num % 7 == 0);
    if($num % 7 == 0){
        $salir = true;

    }
}

?>