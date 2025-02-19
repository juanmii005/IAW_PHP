<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14 PHP</title>
</head>
<body>
    <h1>Dividir una cadena (frase) en palabras individuales</h1>


    <?php

        $cadena  = "Mi moto alpina derrapante";
        $separar = explode(" ", $cadena);
        echo $cadena . " separada: <br>";
        echo "<br>" . $separar[0]; 
        echo "<br>" . $separar[1]; 
        echo "<br>" . $separar[2]; 
        echo "<br>" . $separar[3]; 

    ?>

</body>
</html>
