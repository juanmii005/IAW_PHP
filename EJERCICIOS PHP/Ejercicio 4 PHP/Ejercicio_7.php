<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 PHP</title>
</head>
<body>
    <h1>Mayusculas y Minusculas</h1>


    <?php
            $cadena1 = "DE MAYUSCULAS A MINUSCULAS";

            $minus = mb_convert_case($cadena1, MB_CASE_LOWER, "UTF-8");


            $cadena2 = "<br><br>de minusculas a mayusculas";


            $mayus = mb_convert_case($cadena2, MB_CASE_UPPER, "UTF-8");


            echo $minus;
            echo $mayus;
    ?>
</body>
</html>
