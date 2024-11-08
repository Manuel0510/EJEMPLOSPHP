<?php
//operadores logicos .
// TRUE equivale a 1; y FALSE equivale a 0;
//AND(&& o and): Devuelve true si ambas expresiones son verdaderas.
//OR(|| o or ):Devuelve true si al menos una de las expresiones es verdadera.
//NOT (!): Invierte el valor logico de una expresión.

$a = 5; //true por es distinta que 0
$b = 0; //false
$c = 10; // Verdadero

//AND Logico(&&)
echo "AND logico (&&) <br>";
//echo  (int)($a && $b )."<br>";
//echo  ($a && $c )."<br>";

if(($a && $b )){
    echo "Es true "."<br>";
}else{
    echo "Es false". "<br>";
}
$result = ($a > $b) ? "Es true " : "es False". "<br>"; 
echo "$result"."<br>";


//OR Logico (||)
echo " OR Logico (||)". "<br>";
echo ($a || $b). "<br>";
echo ($a || $c ). "<br>";
echo (int)($b || 0)."<br>";


//NOT Logico (!)
echo "NOT Logico (!)"."<br>";
echo (int)(!$a) . "<br>";

// Para casa : Utilizar if para || y para la negación




?>