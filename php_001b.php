<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_001b</title>
</head>
<body>
    <table style="border: 1px solid black;">
        <tr>
            <th>Tipo</th>
            <th>Ventajas</th>
            <th>Incovennientes</th>

        <tr>
            <td>A</td>
            <td>mas rapido</td>
            <td>mas caro</td>
            </tr>
        <tr>
            <td>B</td>
            <td>Mas barato</td>
            <td>Mas lento</td>
            </tr>
    </table>
    <h1>40</h1>
    <h2>Aqui termina el html</h2>
    <hr>
</body>
</html>


<?php 

    $edad = 40;
    print($edad);
    echo"<br>"; //Imprimimos una linea en blanco 
    echo "<h1>";
    echo $edad; 
    echo"</h1>";
    print("<h1>");
    $nombre = "Manuel";
    print($nombre);
?>
