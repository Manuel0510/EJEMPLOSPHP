<!-- Optimizaar estilos en una etiqueta style -->
<?php
 echo "<style> 
            .table-container{
           border: 2px solid green;
             border-collapse:collapse;
              margin: 3px auto; 
              }
            .celdas{
            border: 1px solid green;
             padding:5px;
            }
 
        </style>";


for($i = 1; $i <= 10; $i++){
    echo "<table class='table-container'>";
    echo " <tr> ";
    echo "<th colspan='5'>Tabla del: $i</th>";
    echo "</tr>";

    for($j = 1; $j <= 10; $j++){
        $res = $i * $j;
        echo "<tr>";
        echo "<td class='celdas'>$i</td>";
        echo "<td class='celdas'>x</td>";
        echo "<td class='celdas'>$j</td>";
        echo "<td class='celdas'>=</td>";
        echo "<td class='celdas'>$res</td>";
        echo "</tr>";


    }
    echo "</table>" . "<br>";
}




?>