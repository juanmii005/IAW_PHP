<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 PHP</title>
</head>
<body>
    <h1>Remplazar texto en cadena</h1>


    <?php
            $cadena1 = "China tiene una barbaridad de habitantes";
            $original = "China tiene una barbaridad de habitantes";
            $sustituto = "China no mola nada";
            $remplazo = str_replace($original, $sustituto, $cadena1);

            echo $remplazo;
    
    ?>


</body>
</html>
