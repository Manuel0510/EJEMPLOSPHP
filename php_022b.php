<?php
//while tiene la condicion antes de entrar en el bucle 
// es un bucle que se ejcute mientras la condicion se haya cumplido, no lleva inicialización por lo tanto hay que hacerlo fuera del bucle  

//for ($i = 1; $i <=100; $i++){
  //  echo $i ." ";
//}

$i= 1;
while($i <= 100){
echo $i. " ";
$i++;

}
echo "<br>";

//DO: La condición se cumple al final , al menos una vez se cumple el bucle.
echo " Con buble DO"."<br>";
$j = 1;
do{
   echo $j. " ";
    $j ++;
}while ($j <=100);


?>