<!-- Bucles anidadps for dentro de otro for-->


<?php
// si quiero insertar html dentro de php lo hacemos con echo o print 
for ($i = 1; $i <= 10; $i++) {
    echo " <h3>Tabla del $i:</h3>";
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado"."<br>";
    }
  
}
?>
 