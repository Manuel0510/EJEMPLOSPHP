<?php 
//if normal y con operador ternario 

$a = 8;
$b = 5;

if($a > $b){
    echo "$a es mayor que $b". "<br>";
}else{
    echo "$a es menor que $b"."<br>";
}

//operador ternario 
    $resultado = ($a > $b) ? "$a es mayor $b" : "$a es menor que $b con ternario". "<br>";
    echo $resultado . "<br>"; 




?>