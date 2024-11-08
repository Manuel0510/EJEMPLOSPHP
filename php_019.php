<?php
// Operadores de Comparación que son usados en la condicion de las estructuras condicionales 
//== : igual
//!= Diferente
// <,>,<=,>=

$nota = 7;


if($nota >= 0  && $nota <5){
    echo "suspenso";
}elseif($nota >= 5  && $nota <6){
    echo "suficiente ";
}elseif($nota >= 6  && $nota <7){
    echo "bien";
}elseif($nota >= 7  && $nota <9){
    echo "notable";
}else{
    echo "Sobresaliente";
}



?>