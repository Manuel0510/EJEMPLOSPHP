<?php

$a = 25;
$b = 20;


if($a > $b){
    print (" A es mayor q B y es :".$a ."<br>");
}else{
    if($a < $b){
        print (" B es mayor q Ay es :".$b ."<br>");
    }else{
    print ("A y B son iguales" ."<br>");
}
}

//Else if
if($a > $b){
    print (" A es mayor q B y es :".$a ."<br>");
}elseif($a < $b){
    print (" B es mayor q Ay es :".$b ."<br>");
} else{
    print ("A y B son iguales" ."<br>");
}


?>