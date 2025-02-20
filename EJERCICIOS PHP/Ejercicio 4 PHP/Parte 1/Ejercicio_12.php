<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12 PHP</title>
</head>
<body>
    <h1>Generar una cadena aleatoria</h1>


    <?php

        $cadena = "abcdefghijklmnopqrstuvwxyz123456789";
        $aleatorio = str_shuffle($cadena);

        echo $aleatorio;

    ?>

</body>
</html>
