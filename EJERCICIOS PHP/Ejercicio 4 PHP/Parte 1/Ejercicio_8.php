<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 PHP</title>
</head>
<body>
    <h1>Longitud de una cadena</h1>


    <?php
            $cadena1 = "China tiene una barbaridad de habitantes";
            $longitud = mb_strlen($cadena1);

            echo "($cadena1) tiene $longitud letras";

    ?>
</body>
</html>
