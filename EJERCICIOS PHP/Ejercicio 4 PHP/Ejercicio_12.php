<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12  PHP</title>
</head>
<body>
    <h1>Generar una cadena aleatoria</h1>


    <?php
        $var = "La vida de un critico";
        $quitarespacios = str_replace(" ", "", $var);

        echo $quitarespacios;


    ?>

</body>
</html>
