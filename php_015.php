<?php
//var_dump(var): Muestra informacion sobre uuna variables , la primera toma de contacto con arrays.

$a = 22;
echo var_dump($a). "<br>";

$b = "Hola Mundo";
echo var_dump($b). "<br>";



$c = 22.5;
echo var_dump($c). "<br>";


$d = array("rojo","verde","azul");
echo var_dump($d). "<br>";

$e = array(22,"Hola Mundo",22.5,array("rojo","verde","azul"));
echo var_dump($e). "<br>";

echo var_dump($a,$b). "<br>";

?>