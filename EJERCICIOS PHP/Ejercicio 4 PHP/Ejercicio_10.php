<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10 PHP</title>
</head>
<body>
    <h1>Comprobar si una cadena tiene un carácter indicado</h1>


    <?php
        $var = "BUENOS DIAS";
        $var2 = "O";
        $comprobacion = strpos($var, $var2);


        if (empty($comprobacion)) {
            echo "La letra '$var2' no fue encontrada en la variable '$var'";
        } else {
        echo "La cadena '$var2' fue encontrada en la variable '$var' y existe en la posición $comprobacion";
        }
    ?>

</body>
</html>
