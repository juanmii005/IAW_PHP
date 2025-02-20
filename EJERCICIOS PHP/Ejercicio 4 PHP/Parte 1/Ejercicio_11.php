<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11 PHP</title>
</head>
<body>
    <h1>Eliminar los espacios de una cadena</h1>


    <?php
        $var = "La vida de un critico";
        $quitarespacios = str_replace(" ", "", $var);

        echo $quitarespacios;


    ?>

</body>
</html>
