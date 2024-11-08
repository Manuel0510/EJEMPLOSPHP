<?php
//CADENAS -> Su posicion inicial simpre va a ser 0 
// Funciones:
//strlen(): Devuelve la longitud  de una cadena 
//strtolower(): Me convierte la cadena en minusculas 
//strtoupper():Me convierte toda la cadena en mayusculas 
//strcmp():Compara dos cadenas(sensible a mayusculas y minusculas) =0
//strcasecmp():Compara dos cadenas(Insensible a mayusculas y misnusculas)=0
//substr(): Extraer una parte de la cadena
//str_repeat():repite una cadena el numero de veces que se especifican
//trim(): Eliminar los espacios en blanco al principio y al final.
//str_word_count():Cuenta las  palabras de una cadena de texto
//strrev():Invierte la cadena 
//strpos():Busca un texto de una cadena y devuelve su posicion 
//str_replace():remplazar unos caracteres por otros

//Asignar "Hola Mundo!"
$texto = "Hola Mundo ";

//contar palabras
echo "$texto :". str_word_count($texto)."<br>";


 //Invetir texto
 echo "$texto:". strrev($texto). "<br>";

//Buscar el texto "Mundo"  dentro de la cadena 
echo "$texto:". strpos($texto,"Mundo"). "<br>";

//Remplazar la cadena Mundo por 'Dolly
echo " Cambiamos 'Dolly'-$texto:". str_replace("Mundo","Dolly",$texto). "<br>";

//Longitud de una cadena
echo "$texto:". strlen($texto). "<br>";

// Pasar a minusculas
echo "$texto:". strtolower($texto). "<br>";

//Pasar a mayusculas 
echo "$texto:". strtoupper($texto). "<br>";

//Comaparar Cadenas sensibles mayusculas y minisculas
echo "$texto:". strcmp("HOLA","hola"). "<br>";

//Comaparar Cadenas insensibles mayusculas y minisculas
echo "$texto:". strcasecmp("Hola","hola"). "<br>";

//extraemos 5 caracteres a partir del caracter 5
echo "$texto:". substr($texto,5,3). "<br>";

//repetir una cadena 
echo "$texto:". str_repeat($texto,4)."<br>";

//Eliminar espacios en blanco 
echo "$texto:". trim("1         $texto        2"). "<br>";

?>