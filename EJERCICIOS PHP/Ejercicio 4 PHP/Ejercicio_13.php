<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13 PHP</title>
</head>
<body>
    <h1>Contar el número de palabras en una frase</h1>


    <?php

        $cadena = "Mi moto alpina derrapante";
        $contar = str_word_count($cadena);

        echo "La cadena '$cadena' tiene $contar palabras"

    ?>

</body>
</html>
