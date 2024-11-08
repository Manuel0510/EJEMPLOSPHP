<?php
//Expresiones aritmeticas 
//No es necesario inicializar varibales en php , sin embargo, es muy buena practica , las variables no inicializadas tienen un valor predeterminao de acuerdo a su tipo dependiendo del contexto en el que son usuadas . Las booleanas se asumen como false los enteros y flotantes como cero las cena (PJ: en un echo ) se establecen como una cadena vacia y los arrays se establecen como un array vacio.

$a = 20;
$b = 3;
$resultado = 0;

//suma 

$resultado = $a + $b;
echo "$a + $b es $resultado <br>";
echo '$a + $b es $resultado';

//resta 
 $resultado = $a - $b;
echo "$a - $b es $resultado <br>";

//producto
$resultado = $a * $b;
echo "$a * $b es $resultado <br>";


//division
$resultado = $a / $b;
echo "$a / $b  es $resultado <br>";

//division entera
$resultado = (int)($a / $b);
echo "(int)($a / $b) es $resultado ";

//modulo (%)
$resultado = $a % $b;
echo "El resto de dividir $a entre $b es $resultado <br>";


//incrementos Post-Incrementos: devuelve el valor y lo incrementa
$resultado = $a++; // resultado = a y posteriormente + 1
echo "El valor de a es : $a - mas post-incremento es: $resultado <br>";


//pre-Incremneto

$resultado = ++$a;// 1º $a = $a + 1 ;
echo "El valor de a es : $a - mas pre-Incremento es: $resultado <br>";

//post-decremento
$a = 20;
$resultado = $a--; // resultado= 20 y a =19
echo " El valor de a con post-decremento:$a y el resultado es: $resultado <br>";
// Pre-Decremento
$a = 20;
$resultado = --$a; // resultado= 19 y a =19
echo " El valor de a con post-decremento:$a y el resultado es: $resultado <br>";

//Asignación de operadores
$a = 20;
$a+=10;//$a = $a +10;
echo "$a<br>";

$a = 20;
$a-=10;//$a = $a - 10;
echo "$a<br>";

$a = 20 ;
$a *=10;
echo "$a<br>";

$a = 20 ;
$a /=10;
echo "$a<br>";

//prioridad operadores
$resultado = 2 + 3 * 5;
echo "$resultado <br>";

$resultado = (2 + 3) * 5;
echo "$resultado <br>";

?>