<?php
    //unset: Elimina una variable o array respetando el ambito de dicha variable

    $var = 4;
    if(isset($var)){
        print("La variable esta configurada".$var);

    }else{
        print("La variable no esta configurada");
    
    }

    unset($var);    //elimino la variable
    echo"<br>";
    if(isset($var)){
        print("La variable esta configurada".$var);

    }else{
        print("La variable no esta configurada");
    
    }


?>
