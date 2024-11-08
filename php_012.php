<?php
    //isset devuelve 1 si esta definida la variable , 0 en caso contrario 
    // Comprueba si una variable esta definida y no es NULL 
    // el valor null representa una variable sin valor.
    $var1 = 4;
    if(isset($var1)){
        print("La variable var1 esta inicializada y no es null. su valor es ".$var1);

    }else{
        print("La variable no esta inicializada");
    }

    echo "<br>";

$var2 = null;
if(isset($var2)){
    print("La variable var1 esta inicializada y no es null. su valor es ".$var2);

}else{
    print("La variable no esta definida y su valor es NULL");
}



?>