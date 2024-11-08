<?php
//Bucle FOR: Estructura de programas que se usa para repeit un determiado codigo un numero determinado de veces
//Conocemos de ante mano el numero de veces que quiero repetir la accion  
// lleva Implicito la inicialización, la condición, incremento o decremento 
// for (Inicializacion;condicion;incremento/decremento){
//
//}


for ($i = 1; $i <=100; $i++){
    echo "$i , ";
    $msg = ($i == 100 ) ? "$i. ": "$i, ";
    echo $msg;
}

?>